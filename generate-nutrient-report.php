<?php
include ('connection.php');
$list_of_classification= array();
$conditions = array();
 $array1 = NULL;
 error_reporting(E_ALL);
ini_set('display_errors', 1);




foreach ($_POST['Classification_Number'] as  $selectedOptionClass){
    //echo $selectedOptionClass;

if($selectedOptionClass != null){


    $list_of_classification[] = "C.Classification_Number LIKE '%" .  filter_var($selectedOptionClass, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) . "%'"; 
}
}

$fields_name = array(
                      'P.Description',
                      'S.Nielsen_Category',
                      'S.Sales_Year',
                      'P.Brand',
                      'P.Manufacturer',
                      'P.Cluster_Number'

                      

            );
$inputs_fields_name = array(
                      'Description',
                      'Nielsen_Category',
                      'Sales_Year',
                      'Brand',
                      'Manufacturer',
                      'Cluster_Number'
  
       );

for($i = 0; $i < count($inputs_fields_name); ++$i){
  if(isset($_POST[$inputs_fields_name[$i]]) && $_POST[$inputs_fields_name[$i]] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $variable = $fields_name[$i];
            $conditions[] = "$variable LIKE '%" . test_input(mysqli_real_escape_string($conn,$_POST[$inputs_fields_name[$i]])) . "%'";
  }

}
if(count($list_of_classification) > 0 && count($conditions) > 0 ){

            $array1 = implode (' AND ', $conditions);

            $list_of_classification1 = implode (' OR ', $list_of_classification);   
        
            $array1 = "$array1 AND (" . "$list_of_classification1)";

}else if(count($list_of_classification) < 1 && count($conditions) > 0 ){
    
            $array1 = implode (' AND ', $conditions);

}else if(count($list_of_classification) > 0 && count($conditions) < 1){
        
            $array1 = implode (' OR ', $list_of_classification);  
    }

    if(is_null($array1)){
       $query =<<<EOQ
  SELECT P.Description,
       P.Brand AS Product_Brand,
       P.Manufacturer AS Product_Manufacturer,
       P.Comments AS Product_Comments,
       S.Sales_UPC,
       P.Cluster_Number AS Product_Cluster_Number,
       C.Classification_Number AS Product_Classification_Number,
       C.Classification_Name AS Product_Classification_Name,
       C.Classification_Type AS Product_Classification_Type,
       S.Sales_Description,
       S.Kilo_Vol,
       S.Dollar_Volume,
       S.Nielsen_Category AS Sales_Nielsen_Category,
       S.Sales_Year,
       S.Source AS Sales_Source,
       S.Comments AS Sales_Comments,
       S.Brand AS Sales_Brand,
       S.Package_Size AS Sales_Package_Size,
       S.Dollar_Rank,
       S.Dollar_Volume_PerCentage_Change,
       S.Kilo_Share,
       S.Kilo_Volume_Percent_Change,
       S.Average_AC_Dist,
       S.Average_Retail_Price,
       S.Manufacturer AS Sales_Manufacturer,
       S.Classification_Number AS Sales_Classification_Number,
       S.Classification_Type AS Sales_Classification_Type,
       S.Collection_Date AS Sales_Collection_Date,
       S.Product_Grouping,
       S.Neilson_Category_Number,
       S.Kilo_Volume_Total,
       S.Dollar_Volume_Total,
       S.Control_Label_Flag,
       S.Cluster_Number AS Sales_Cluster_Number,
       S.Dollar_Share,
       S.Kilo_Rank,
       PK.PackageID,
       PK.Label_UPC,
       PK.Label_Description,
       PK.Health_Claim,
       PK.Suggested_Direction,
       PK.Other_Package_Statement,
       PK.Nutrition_Claim,
       PK.Ingredients,
       PK.Nutrition_Fact_Table,
       PK.Common_Measure,
       PK.Per_Serving_Amount,
       PK.Per_Serving_Unit,
       PK.Collection_Date AS Package_Collection_Date,
       PK.Comments AS Package_Comments,
       PK.PPD_Per_Serving_Amount,
       PK.PPD_Per_Serving_UofM,
       PK.Nielsen_Category AS Package_Nielsen_Category,
       PK.Brand AS Package_Brand,
       PK.Manufacturer AS Package_Manufacturer,
       PK.Country,
       PK.Package_Size AS Package_Package_Size,
       PK.Number_Of_Units,
       PK.Storage_Type,
       PK.Storage_Statement,
       PK.Product_Description AS Package_Product_Description,
       PK.Multipart,
       PK.Nielsen_Item_Rank_UPC,
       PK.Package_Size_UofM,
       PK.Per_Serving_Amount_In_Grams,
       PK.Per_Serving_Amount_In_Grams_PPD,
       PK.MultipartFlag,
       PK.Source AS Package_Source,
       PK.Calculated,
       PK.Classification_Number AS Package_Classification_Number,
       PK.Classification_Name AS Package_Classification_Name
  FROM Product P
  LEFT 
  JOIN Product_Classification PC
    ON P.ProductID              = PC.ProductID
  LEFT 
  JOIN Classification C
    ON PC.ClassificationID      = C.ClassificationID
  LEFT 
  JOIN Sales S
    ON P.ProductID              = S.ProductIDS
  LEFT 
  JOIN Package PK
    ON PK.Nielsen_Item_Rank_UPC = S.Sales_UPC
EOQ;

    }else{

        
$query =<<<EOQ
  SELECT P.Description,
       P.Brand AS Product_Brand,
       P.ProductID AS Product_Product_ID,
       P.Manufacturer AS Product_Manufacturer,
       P.Comments AS Product_Comments,
       P.Cluster_Number AS Product_Cluster_Number,
       C.Classification_Number AS Product_Classification_Number,
       C.Classification_Name AS Product_Classification_Name,
       C.Classification_Type AS Product_Classification_Type,
       S.Sales_UPC,
       S.Sales_Description,
       S.Kilo_Vol,
       S.Dollar_Volume,
       S.Nielsen_Category AS Sales_Nielsen_Category,
       S.Sales_Year,
       S.Source AS Sales_Source,
       S.Comments AS Sales_Comments,
       S.Brand AS Sales_Brand,
       S.Package_Size AS Sales_Package_Size,
       S.Dollar_Rank,
       S.Dollar_Volume_PerCentage_Change,
       S.Kilo_Share,
       S.Kilo_Volume_Percent_Change,
       S.Average_AC_Dist,
       S.Average_Retail_Price,
       S.Manufacturer AS Sales_Manufacturer,
       S.Classification_Number AS Sales_Classification_Number,
       S.Classification_Type AS Sales_Classification_Type,
       S.Collection_Date AS Sales_Collection_Date,
       S.Product_Grouping,
       S.Neilson_Category_Number,
       S.Kilo_Volume_Total,
       S.Dollar_Volume_Total,
       S.Control_Label_Flag,
       S.Cluster_Number AS Sales_Cluster_Number,
       S.Dollar_Share,
       S.Kilo_Rank,
       PK.PackageID,
       PK.Label_UPC,
       PK.Label_Description,
       PK.Health_Claim,
       PK.Suggested_Direction,
       PK.Other_Package_Statement,
       PK.Nutrition_Claim,
       PK.Ingredients,
       PK.Nutrition_Fact_Table,
       PK.Common_Measure,
       PK.Per_Serving_Amount,
       PK.Per_Serving_Unit,
       PK.Collection_Date AS Package_Collection_Date,
       PK.Comments AS Package_Comments,
       PK.PPD_Per_Serving_Amount,
       PK.PPD_Per_Serving_UofM,
       PK.Nielsen_Category AS Package_Nielsen_Category,
       PK.Brand AS Package_Brand,
       PK.Manufacturer AS Package_Manufacturer,
       PK.Country,
       PK.Package_Size AS Package_Package_Size,
       PK.Number_Of_Units,
       PK.Storage_Type,
       PK.Storage_Statement,
       PK.Product_Description AS Package_Product_Description,
       PK.Multipart,
       PK.Nielsen_Item_Rank_UPC,
       PK.Package_Size_UofM,
       PK.Per_Serving_Amount_In_Grams,
       PK.Per_Serving_Amount_In_Grams_PPD,
       PK.MultipartFlag,
       PK.Source AS Package_Source,
       PK.Calculated,
       PK.Classification_Number AS Package_Classification_Number,
       PK.Classification_Name AS Package_Classification_Name
  FROM Product P
  LEFT 
  JOIN Product_Classification PC
    ON P.ProductID              = PC.ProductID
  LEFT 
  JOIN Classification C
    ON PC.ClassificationID      = C.ClassificationID
  LEFT 
  JOIN Sales S
    ON P.ProductID              = S.ProductIDS
  LEFT 
  JOIN Package PK
    ON PK.Nielsen_Item_Rank_UPC = S.Sales_UPC
   WHERE $array1 
EOQ;
    }

    $stmt = $conn->prepare($query);
    $result_insert = $stmt->execute();
     $result = $stmt->get_result();

$editpackagequery = <<<EOQ
SELECT *
  FROM Package K
 INNER JOIN Product_Component PC
    ON K.PackageID      = PC.PackageID
 INNER JOIN Components C
    ON PC.ComponentID   = C.ComponentID
 WHERE C.Component_Name = ?
   AND K.PackageID      = ?
   AND PPD              = ?
EOQ;






     while($row = $result->fetch_assoc())  {

       $Sodium_Amount= NULL;
       $Sodium_Unit = NULL;
       $Sodium_Daily_Value = NULL;
       $Sodium_Amount_as_prepared = NULL;
       $Sodium_Unit_as_prepared=NULL;
       $Sodium_Daily_Value_as_prepared = NULL;

       
       if(is_numeric($row['PackageID']) && $row['PackageID'] != 0){

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $Component_Name = 'Sodium';
        $PPD = 1;
        $editpackagestmt->bind_param("sii", $Component_Name, $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_ = $editpackagestmt->get_result();
        $row_ = $result_->fetch_assoc();
        $Sodium_Amount = $row_['Amount'];
        $Sodium_Unit   = $row_['Amount_Unit_Of_Measure'];
        $Sodium_Daily_Value   = $row_['Daily_Value'];
         $PPDD=0;  
        	$as_prepared = $conn->prepare($editpackagequery);
          $as_prepared->bind_param("sii", $Component_Name, $row['PackageID'], $PPDD);
          $as_prepared->execute();
          $result_asprepared = $as_prepared->get_result();
          $row_asprepared = $result_asprepared->fetch_assoc();
          $Sodium_Amount_as_prepared = $row_asprepared['Amount'];
          $Sodium_Unit_as_prepared   = $row_asprepared['Amount_Unit_Of_Measure'];
          $Sodium_Daily_Value_as_prepared   = $row_asprepared['Daily_Value'];
  }


echo "<tr>
           <td> <a href=view_product.php?ProductID=" .$row['Product_Product_ID'] . " target = '_blank'>". $row['Description'] . "</a></td>
            <td>". $row['Product_Manufacturer'] .                       " </td>
            <td>". $row['Product_Brand'] .                                " </td>
            <td>". $row['Product_Classification_Number'] .                                " </td>
            <td>". $row['Product_Classification_Name'] .                                " </td>
            <td>". $row['Product_Cluster_Number'] .                                " </td>
            <td>". $row['Product_Comments'] .                                " </td>
             <td>'". $row['Sales_UPC'] .                                "' </td>
            <td>". $row['Sales_Description'] .                                " </td>
            <td>". $row['Sales_Brand'] .                                " </td>
            <td>". $row['Sales_Manufacturer'] .                                " </td>
            <td>". $row['Dollar_Rank'] .                                " </td>
            <td>". $row['Dollar_Volume'] .                                " </td>
            <td>". $row['Dollar_Share'] .                                " </td>
            <td>". $row['Dollar_Volume_PerCentage_Change'] .                                " </td>
            <td>". $row['Kilo_Vol'] .                                " </td>
            <td>". $row['Kilo_Share'] .                                " </td>
            <td>". $row['Kilo_Volume_Percent_Change'] .                                " </td>
            <td>". $row['Average_AC_Dist'] .                                " </td>
            <td>". $row['Average_Retail_Price'] .                                " </td>
            <td>". $row['Sales_Source'] .                                " </td>
            <td>". $row['Sales_Nielsen_Category'] .                                " </td>
            <td>". $row['Sales_Collection_Date'] .                                " </td>
            <td>". $row['Sales_Year'] .                                " </td>
            <td>". $row['Control_Label_Flag'] .                                " </td>
            <td>". $row['Kilo_Volume_Total'] .                                " </td>
            <td>". $row['Kilo_Rank'] .                                " </td>
            <td>". $row['Dollar_Volume_Total'] .                                " </td>
            <td>". $row['Sales_Cluster_Number'] .                                " </td>
            <td>". $row['Product_Grouping'] .                                " </td>
            <td>". $row['Sales_Classification_Number'] .                                " </td>
            <td>". $row['Sales_Classification_Type'] .                                " </td>
            <td>". $row['Sales_Comments'] .                                " </td>
            <td>". $row['Sales_Package_Size'] .                                " </td>
            <td>". $row['Neilson_Category_Number'] .                                " </td>
            <td>'". $row['Label_UPC'] .                                "' </td>
            <td>". $row['Nielsen_Item_Rank_UPC'] .                                " </td>
            <td>". $row['Package_Nielsen_Category'] .                                " </td>
            <td>". $row['Label_Description'] .                                " </td>
            <td>". $row['Package_Brand'] .                                " </td>
            <td>". $row['Package_Manufacturer'] .                                " </td>
            <td>". $row['Country'] .                                " </td>
            <td>". $row['Package_Package_Size'] .                                " </td>
            <td>". $row['Package_Size_UofM'] .                                " </td>
            <td>". $row['Number_Of_Units'] .                                " </td>
            <td>". $row['Storage_Type'] .                                " </td>
            <td>". $row['Storage_Statement'] .                                " </td>
            <td>". $row['Package_Collection_Date'] .                                " </td>
            <td>". $row['Health_Claim'] .                                " </td>
            <td>". $row['Nutrition_Claim'] .                                " </td>
            <td>". $row['Other_Package_Statement'] .                                " </td>
            <td>". $row['Suggested_Direction'] .                                " </td>
            <td>". nl2br($row['Ingredients']) .                                " </td>
            <td>". $row['Multipart'] .                                " </td>
            <td>". nl2br($row['Nutrition_Fact_Table']) .                                " </td>
            <td>". $row['Common_Measure'] .                                " </td>
            <td>". $row['Per_Serving_Amount'] .                                " </td>
            <td>". $row['Per_Serving_Unit'] .                                " </td>
            <td>". $row['PPD_Per_Serving_Amount'] .                                " </td>
            <td>". $row['PPD_Per_Serving_UofM'] .                                " </td>
            <td>". $row['Package_Comments'] .                                " </td>
            <td>". $row['Package_Source'] .                                " </td>
            <td>". $row['Package_Product_Description'] .                                " </td>
            <td>". $row['Per_Serving_Amount_In_Grams'] .                                " </td>
            <td>". $row['Per_Serving_Amount_In_Grams_PPD'] .                                " </td>
            <td>". $row['MultipartFlag'] .                                " </td>
            <td>". $row['Calculated'] .                                " </td>
            <td>". $row['Package_Classification_Number'] .                                " </td>
            <td>". $row['Package_Classification_Number'] .                                " </td>
            <td>   $Sodium_Amount   </td>
            <td>   $Sodium_Unit  </td>
            <td>   $Sodium_Daily_Value</td>
            <td>   $Sodium_Amount_as_prepared   </td>
            <td>   $Sodium_Unit_as_prepared  </td>
            <td>   $Sodium_Daily_Value_as_prepared</td>
            








     </tr>"; 

     }
     echo " </tbody></table>";
echo "<script>document.getElementById(\"toHide\").style.display= \"block\";</script>";


 mysqli_close($conn);




    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>