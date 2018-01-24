
<?php
//    header("Content-type: text/plain");
//    header("Content-Disposition: attachment; filename=savethis.txt");

// header("Content-Type: text/csv");
// header("Content-Disposition: attachment; filename=file.csv");
// # Disable caching - HTTP 1.1
// header("Cache-Control: no-cache, no-store, must-revalidate");
// # Disable caching - HTTP 1.0
// header("Pragma: no-cache");
// # Disable caching - Proxies
// header("Expires: 0");

include 'connection.php';
include 'PackageInfo.php';

// $output = fopen("php://output", "w");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$allowed  = array(
    'csv'
);
$tmpfname = $_FILES['file_save']['tmp_name'];
$ext      = pathinfo($_FILES['file_save']['name'], PATHINFO_EXTENSION);




if (!in_array($ext, $allowed)) {
    echo "<h3>Selected File is Not a CSV file</h3>";
    
    
} else {
    
    
    $count                  = 0;
    $skipped_label          = new SplQueue();
    $skipped_count          = 0;
    $new_product            = new SplQueue();
    $new_product_count      = 0;
    $linked_sales           = new SplQueue();
    $linked_to_market_count = 0;
    $linked_label           = new SplQueue();
    $linked_to_label_count  = 0;
    $duplicate_label        = new SplQueue();
    $duplicate_count        = 0;

    $linked_by_gouping_count  = 0;
    $linked_by_gouping        = new SplQueue();

    $skipped_same_upc_different_grouping_count  = 0;
    $skipped_same_upc_different_grouping        = new SplQueue();
    
    $invalid_combination_count  = 0;
    $invalid_combination        = new SplQueue();
    
    try {
        $conn->autocommit(FALSE);
        
        $handle = fopen($_FILES['file_save']['tmp_name'], "r");
        
        $Username = $_SESSION['currentuser'];
        while (($data = fgetcsv($handle, ",")) !== FALSE) {
            
            $packageObject = new PackageInfo;
            
            $var = array();
            
            ++$count;
            if ($count > 1) {
                
                include 'ImportLabelNutrientsData.php';
                
                if ((empty($packageObject->getLabel_UPC()) && strlen($packageObject->getLabel_UPC()) == 0) 
                    or (empty($packageObject->getLabel_Description()) && strlen($packageObject->getLabel_Description()) == 0) 
                    or (empty($packageObject->getCollection_Date()) && strlen($packageObject->getCollection_Date()) == 0) 
                    or (empty($packageObject->getSource()) && strlen($packageObject->getSource()) == 0) 
                    or (empty($packageObject->getRecord()) && strlen($packageObject->getRecord()) == 0) 
) // or $Label_Description === null  or $Ingredients === null or $Nutrition_Fact_Table=== null or $Per_Serving_Amount=== null or $Per_Serving_UofM === null or $Per_Serving_Energy_Kcal === null    or $Source === null)
                    {
                    
                    ++$skipped_count ;
                    $inputx = $packageObject->getLabel_Description();
                    $skipped_label->push($inputx);
                    
                } else {  
                    
                    if ($packageObject->checkForDuplicates($conn)) {
                        
                        $input_dup = $packageObject->getLabel_Description();
                        $duplicate_label->push($input_dup);
                        ++$duplicate_count;

                    } else {
                        if($packageObject->checkIfSameUPCWithDifferentGrouping($packageObject->getLabel_UPC(),$packageObject->getProduct_Grouping(),$conn)){
                                $skipped_same_upc_different_grouping_count++;
                                $input = $packageObject->getLabel_Description();
                                $skipped_same_upc_different_grouping->push($input);
    

                        }else{
                                                  
                        if (!$packageObject->checkForUpcLabelMatch($packageObject->getLabel_UPC(), $conn)) {

                            
                            if($packageObject->checkIfSameGrouping($packageObject->getProduct_Grouping(), $conn)){

                if($packageObject->validateFields($packageObject->getProduct_Grouping(), $packageObject->getClassification_Number(), $packageObject->getBrand(), $packageObject->getManufacturer(),$packageObject->getType_Of_Restaurant(),$conn))
                                {

                                $idReturned = $packageObject->createPackageLabelUPCGroupingMatch($Username, "Product_Grouping", $packageObject->getProduct_Grouping(), $conn);
								$packageObject->updateFields("Product_Grouping", $packageObject->getProduct_Grouping(), "ProductIDP", "Package", $Username, $conn);
								$packageObject->PopulateNFT($idReturned, $cars, $conn);
                                $linked_by_gouping_count++;
                                $input = $packageObject->getLabel_Description();
                                $linked_by_gouping->push($input);
                                }else{
                                    $invalid_combination_count++;
                                    $invalid_combination->push($packageObject->getLabel_Description());
                                }
                            

                            }else{
                            
                            if (!$packageObject->checkForUpcSalesMatch($packageObject->getNielsen_Item_Rank_UPC(), $conn)) {
                                
                                   /* Create new Product and attach the label to it $Username  Last_Edited_By Last_Edited_By Last_Edited_by */
                                
                                if (empty($packageObject->getProduct_Description()) || strlen($packageObject->getProduct_Description()) == 0) {
                                    $packageObject->setProduct_Description($packageObject->getLabel_Description());
                                }
                                
                                $id  = $packageObject->createProduct($Username, $conn);
                                $id2 = $packageObject->createPackage($id, $conn,$Username);
                                
                                ++$new_product_count;                               
                                $packageObject->PopulateNFT($id2, $cars, $conn);                             
                                $input4 = $packageObject->getLabel_Description();
                                $new_product->push($input4);
                                
                            } else {
                                /* attach label to corresponding Product --Found in Sales Table */
                                $nid = $packageObject->createPackageSalesUPCMatch($Username, $conn);
                                ++$linked_to_market_count;
                                
                                $packageObject->updateFields("Sales_UPC", $packageObject->getNielsen_Item_Rank_UPC(), "ProductIDS", "Sales", $Username, $conn);
                                $packageObject->PopulateNFT($nid, $cars, $conn);
                                $input3 = $packageObject->getLabel_Description();
                                $linked_sales->push($input3);
                                
                            } }            
                            
                        } else {
     //  
    // if($packageObject->validateFieldsLabelUPC($packageObject->getLabel_UPC(), $packageObject->getClassification_Number(), $packageObject->getBrand(), $packageObject->getManufacturer(),$packageObject->getType_Of_Restaurant(),$conn)){
                     
                            $xid = $packageObject->createPackageLabelUPCGroupingMatch($Username, "Label_UPC", $packageObject->getLabel_UPC(), $conn);
                            
                            
                            ++$linked_to_label_count;
                            
                            $packageObject->updateFields("Label_UPC", $packageObject->getLabel_UPC(), "ProductIDP", "Package", $Username, $conn);
                            
                            $packageObject->PopulateNFT($xid, $cars, $conn);
                            $input2 = $packageObject->getLabel_Description();
                            $linked_label->push($input2);
         
                        }
                    }
                    }
                }
            }
            
            
        }
        
        
        
     
        
        include 'importLabelReport.php';       
    }
    catch (Exception $e) {
        echo "An Error occured during import, could not complete the transaction";
        $conn->rollback();
    }
    $conn->commit();
    fclose($handle);
    mysqli_close($conn);
}



?>