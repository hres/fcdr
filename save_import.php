
<?php include 'connection.php';?>
<?php		 
require_once "Classes/PHPExcel.php";


if (isset($_POST['search'])) {
/* 		error_reporting(E_ALL);
ini_set('display_errors', 1); */
	
	
	if (is_uploaded_file($_FILES['file_save']['tmp_name'])) {
		echo "<h3>" . "File ". $_FILES['file_save']['name'] ." uploaded successfully." . "</h3>";
		
	//	readfile($_FILES['file_save']['tmp_name']);

	
	
	
	
	

		$tmpfname = $_FILES['file_save']['tmp_name'];
		
	//echo "0";	
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
//echo "1";
		$excelObj = $excelReader->load($tmpfname);
		//echo "2";
		$worksheet = $excelObj->getSheet(0);
		//echo "3";
		$lastRow = $worksheet->getHighestRow();
		
		//echo "4";
	

    // IF THE FILE DOES NOT EXIST, WRITE TO IT AS YOU OPEN UP A STREAM,
    // OTHERWISE, JUST APPEND TO IT...

    // OPEN THE FILE FOR WRITING OR APPENDING...


		
			$count_skipped = 0;
	$skipped_sales = new SplQueue();
	$new_product = new SplQueue();
	$linked_sales = new SplQueue();

		for ($row = 2; $row <= $lastRow; $row++) {

	//echo "in<br>";
		$Record = $worksheet->getCell('A'.$row)->getValue();
		
		$Sales_UPC = $worksheet->getCell('B'.$row)->getValue();
		$Sales_Description = $worksheet->getCell('C'.$row)->getValue();
		$Brand = $worksheet->getCell('D'.$row)->getValue();
		$Manufacturer = $worksheet->getCell('E'.$row)->getValue();
		//$Package_Size = $data[4];
		$Rank = $worksheet->getCell('F'.$row)->getValue();
		$Dollar_Volume = $worksheet->getCell('G'.$row)->getValue();
		$Shr = $worksheet->getCell('H'.$row)->getValue();
		$Vol_PerCent_Change = $worksheet->getCell('I'.$row)->getValue();
		$Kilo_Vol = $worksheet->getCell('J'.$row)->getValue();
		$Kilo_Shr = $worksheet->getCell('K'.$row)->getValue();
		$Kilo_Vol_PerCent_Change = $worksheet->getCell('L'.$row)->getValue();
		$Avg_AC_Disk = $worksheet->getCell('M'.$row)->getValue();
		$Ave_Retail_Unit_Price = $worksheet->getCell('N'.$row)->getValue();
		$Source = $worksheet->getCell('O'.$row)->getValue();
		//$Neilsen_Category_Number = $data[14];
		$Nielsen_Category = $worksheet->getCell('P'.$row)->getValue();
		$Collection_Date = $worksheet->getCell('Q'.$row)->getValue();
		$Sales_Year = $worksheet->getCell('R'.$row)->getValue();
		$Control_Label = $worksheet->getCell('S'.$row)->getValue();
		$Kilo_Vol_Total= $worksheet->getCell('T'.$row)->getValue();
		$Kilo_Vol_Rank= $worksheet->getCell('U'.$row)->getValue();
			
		$Dollar_Volume_Total= $worksheet->getCell('V'.$row)->getValue();
		
		$Cluster_Number = $worksheet->getCell('W'.$row)->getValue();
		$Product_Grouping= $worksheet->getCell('X'.$row)->getValue();
		$Product_Description= $worksheet->getCell('Y'.$row)->getValue();
		$Classification_Number = $worksheet->getCell('Z'.$row)->getValue();
		$Classification_Type = $worksheet->getCell('AA'.$row)->getValue();
		$Comments = $worksheet->getCell('AB'.$row)->getValue();

		
	
		
		if($Sales_UPC ==null or $Sales_Description ==null  or $Kilo_Vol == null or $Source ==null  or $Sales_Year==null or $Collection_Date==null){
			
			if($Sales_Description){
				
				$input1 = "Record : $Record, $Sales_Description";
				$skipped_sales->push($input1);
				//**********************
				
						continue;
			}else if($Sales_UPC !=null and $Sales_Description==null){
			
				$input2 = "Record : $Record, $Sales_UPC";
				$skipped_sales->push($input2);
				//fwrite($myfile, $Sales_Description);
					
						continue;
				
			}else{
				
				$inputX = "Record : $Record, No Description and Sales UPC available";
				$skipped_sales->push($inputX);
				
				continue;
			}
			
		
		
		 
		}else {			
		if(preg_match('/^\d+$/', $Product_Grouping)){
			
			/* Check if grouping already exists in Market Share table */
			$check_grouping = "Select * from $dbname.Sales where Sales_UPC = $Sales_UPC"; // AND ProductIDS <> (Select Distinct ProductIDS From $dbname.Sales Where Product_Grouping= $Product_Grouping)";
			$result_grouping = mysqli_query($conn,$check_grouping);
			
			$rowcount1=mysqli_num_rows($result_grouping);
			if($rowcount1>0){
		/* 		echo "Sales_UPC Code already belongs to a different product";
				$skipped_sales->push($Description);
				continue; */
				
			$insert_query = "INSERT Into $dbname.Sales (ProductIDS, Sales_UPC, Source, Sales_Description, Sales_Year, Nielsen_Category, Kilo_Vol, Dollar_Volume,Brand,
			Dollar_Rank,Dollar_Volume_PerCentage_Change,Kilo_Share,Kilo_Volume_Percent_Change,Average_AC_Dist,
			Average_Retail_Price, Collection_Date,Dollar_Volume_Total, Product_Grouping) Select Distinct ProductIDS, '$Sales_UPC', '$Source',
			'$Sales_Description', '$Sales_Year', '$Nielsen_Category', '$Kilo_Vol', '$Dollar_Volume', '$Brand', '$Rank', 
			'$Vol_PerCent_Change', '$Kilo_Shr', '$Kilo_Vol_PerCent_Change', '$Avg_AC_Disk', '$Ave_Retail_Unit_Price', '$Collection_Date','$Dollar_Volume_Total',
			'$Product_Grouping' from $dbname.Sales Where Sales_UPC = '$Sales_UPC'";
			
			$result_insert = mysqli_query($conn,$insert_query); 
			
			if($Product_Description != null){
					
					$query_update="UPDATE  $dbname.Product SET Description='$Product_Description' WHERE ProductID=(Select Distinct ProductIDS from $dbname.Sales Where Sales_UPC = '$Sales_UPC')";
					$result_update = mysqli_query($conn,$query_update);
					
				}
				$input3= "Record : $Record, $Sales_Description";
			$linked_sales->push($input3);
			
				
			}else{
				
			$grouping = "Select Distinct SalesID From $dbname.Sales Where Product_Grouping= $Product_Grouping";
			$check_grouping_result = mysqli_query($conn,$grouping);
			$row_count_grouping = mysqli_num_rows($check_grouping_result);
				if($row_count_grouping>0){

					
					/* Grouping exist, so link market share to that product*/	
			$insert_query = "INSERT Into $dbname.Sales (ProductIDS, Sales_UPC, Source, Sales_Description, Sales_Year, Nielsen_Category, Kilo_Vol, Dollar_Volume,Brand,
			Dollar_Rank,Dollar_Volume_PerCentage_Change,Kilo_Share,Kilo_Volume_Percent_Change,Average_AC_Dist,
			Average_Retail_Price, Collection_Date,Dollar_Volume_Total, Product_Grouping) Select Distinct ProductIDS, '$Sales_UPC', '$Source',
			'$Sales_Description', '$Sales_Year', '$Nielsen_Category', '$Kilo_Vol', '$Dollar_Volume', '$Brand', '$Rank', 
			'$Vol_PerCent_Change', '$Kilo_Shr', '$Kilo_Vol_PerCent_Change', '$Avg_AC_Disk', '$Ave_Retail_Unit_Price', '$Collection_Date','$Dollar_Volume_Total',
			'$Product_Grouping' from $dbname.Sales Where Product_Grouping = '$Product_Grouping'";
			
			$result_insert = mysqli_query($conn,$insert_query); 
			$input4= "Record : $Record, $Sales_Description";
			$linked_sales->push($input4);
			
						if($Product_Description != null){
					
					$query_update="UPDATE  $dbname.Product SET Description='$Product_Description' WHERE ProductID=(Select Distinct ProductIDS from $dbname.Sales Where Product_Grouping = '$Product_Grouping')";
					$result_update = mysqli_query($conn,$query_update);
					
				}
			
			//echo "$insert_query";
			
			
			}else if($row_count_grouping<1){
			
					/* Create a new Product */
	
		if($Product_Description ==null){
		   $Product_Description = $Sales_Description;
		}
		$query="INSERT INTO  $dbname.Product (Description, Brand, Manufacturer,  Cluster_Number) VALUES ('$Product_Description','$Brand', '$Manufacturer', '$Cluster_Number')";
		$result = mysqli_query($conn,$query);
		$id =  mysqli_insert_id($conn);
		$input5= "Record : $Record, $Product_Description";
		$new_product->push($input5);
		
			$insert_query2 = "INSERT Into $dbname.Sales (ProductIDS, Sales_UPC, Source, Sales_Description, Sales_Year, Nielsen_Category, Kilo_Vol, Dollar_Volume,Brand,
			Dollar_Rank,Dollar_Volume_PerCentage_Change,Kilo_Share,Kilo_Volume_Percent_Change,Average_AC_Dist,
			Average_Retail_Price, Collection_Date,Dollar_Volume_Total, Product_Grouping) VALUES ($id, '$Sales_UPC', '$Source',
			'$Sales_Description', '$Sales_Year', '$Nielsen_Category', '$Kilo_Vol', '$Dollar_Volume', '$Brand', '$Rank',
			'$Vol_PerCent_Change', '$Kilo_Shr', '$Kilo_Vol_PerCent_Change', '$Avg_AC_Disk', '$Ave_Retail_Unit_Price', '$Collection_Date','$Dollar_Volume_Total',
			'$Product_Grouping')";
			$result_insert = mysqli_query($conn,$insert_query2);
			if(!$result_insert){
				echo "error";
			}
		
		
		//$query2 = "INSERT INTO  $dbname.Classification (Number, Classification_Name, _Type) VALUES ('$classificationid', '$classification_name', '$type')";		
		//$query1_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount_sold', '$energy_unit_sold', '$energy_dvalue_sold', TRUE from $dbname.Package where UPC12 = '$UPC12'";
		if (strlen($Classification_Number) !=0){
		/* 		Must check if Classification number exist
			*/		
				$classification_check = "Select * From $dbname.Classification Where Classification_Number= $Classification_Number";
			$classification_check_result = mysqli_query($conn,$classification_check);
			$classification_check_count = mysqli_num_rows($classification_check_result);
				if($classification_check_count>0){
				$query2 = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) Select ClassificationID , $id from $dbname.Classification where Classification_Number = $Classification_Number";		
				$result2 = mysqli_query($conn,$query2); 	
					
				}else{
					if(strlen($Classification_Type) !=0){
						$query3 = "INSERT INTO $dbname.Classification (Classification_Number, Classification_Type) VALUES ('$Classification_Number','$Classification_Type')";	
						$result3 = mysqli_query($conn,$query3); 	
						$id1 =  mysqli_insert_id($conn);
						
						$queryC = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) VALUES ('$id1','$id')";		
						$resultC = mysqli_query($conn,$queryC); 
						
					}
					
					
				}
			
			

        
		}
			

			

		/* 	$input6= "Record : $Record, $Sales_Description";
			$new_product->push($input6); */
			
			
			//echo "$insert_query2";			
			//}		
				
			}
			
			
		}}	//}
		else if(!preg_match('/^\d+$/', $Product_Grouping)){

			if($Sales_UPC ==null or $Sales_Description ==null ){
			//echo "Missing Fields";
			$skipped_sales->push($Sales_Description);
			continue; 
		}else{
			
		if($Product_Description ==null){
			$Product_Description = $Sales_Description;
		}	
			$check_grouping = "Select * from $dbname.Sales where Sales_UPC = $Sales_UPC"; // AND ProductIDS <> (Select Distinct ProductIDS From $dbname.Sales Where Product_Grouping= $Product_Grouping)";
			$result_grouping = mysqli_query($conn,$check_grouping);
			
			$rowcount1=mysqli_num_rows($result_grouping);
			if($rowcount1>0){
			$insert_query = "INSERT Into $dbname.Sales (ProductIDS, Sales_UPC, Source, Sales_Description, Sales_Year, Nielsen_Category, Kilo_Vol, Dollar_Volume,Brand,
			Dollar_Rank,Dollar_Volume_PerCentage_Change,Kilo_Share,Kilo_Volume_Percent_Change,Average_AC_Dist,
			Average_Retail_Price, Collection_Date,Dollar_Volume_Total, Product_Grouping) Select Distinct ProductIDS, '$Sales_UPC', '$Source',
			'$Sales_Description', '$Sales_Year', '$Nielsen_Category', '$Kilo_Vol', '$Dollar_Volume', '$Brand', '$Rank', 
			'$Vol_PerCent_Change', '$Kilo_Shr', '$Kilo_Vol_PerCent_Change', '$Avg_AC_Disk', '$Ave_Retail_Unit_Price', '$Collection_Date','$Dollar_Volume',
			'$Product_Grouping' from $dbname.Sales Where Sales_UPC = '$Sales_UPC'";
			
			$result_insert = mysqli_query($conn,$insert_query); 
			$input7= "Record : $Record, $Sales_Description";
			$linked_sales->push($input7);	
				continue;
			}else{
		
		
		
		$query="INSERT INTO  $dbname.Product (Description, Brand, Manufacturer,  Cluster_Number) VALUES ('$Product_Description','$Brand', '$Manufacturer', '$Cluster_Number')";
		$result = mysqli_query($conn,$query);
		$id =  mysqli_insert_id($conn);
		$in= "Record : $Record, $Product_Description";
		$new_product->push($in);
		
		
					$query3 = "Select * from $dbname.Sales where Sales_UPC = $Sales_UPC AND ProductIDS <> '$id'"; 
			$result3 = mysqli_query($conn,$query3);
			
			$rowcount2=mysqli_num_rows($result3);
			if($rowcount2>0){
				//echo "Sales_UPC Code already belongs to a different product";
				$input8= "Record : $Record, $Sales_Description";

				$skipped_sales->push($input8);
				
				continue;
				
			}else{
			
			$insert_queryt = "INSERT Into $dbname.Sales (ProductIDS, Sales_UPC, Source, Sales_Description, Sales_Year, Nielsen_Category, Kilo_Vol, Dollar_Volume,Brand,
			Dollar_Rank,Dollar_Volume_PerCentage_Change,Kilo_Share,Kilo_Volume_Percent_Change,Average_AC_Dist,
			Average_Retail_Price, Collection_Date,Dollar_Volume_Total, Product_Grouping) VALUES ($id, '$Sales_UPC', '$Source',
			'$Sales_Description', '$Sales_Year', '$Nielsen_Category', '$Kilo_Vol', '$Dollar_Volume', '$Brand', '$Rank',
			'$Vol_PerCent_Change', '$Kilo_Shr', '$Kilo_Vol_PerCent_Change', '$Avg_AC_Disk', '$Ave_Retail_Unit_Price','$Collection_Date','$Dollar_Volume',
			'$Product_Grouping')";
			$result_insertt = mysqli_query($conn,$insert_queryt);
				if(!$result_insertt){
				echo "error 2 $insert_queryt";
			}
			
		}
		
		
/* 						$classification_check = "Select * From $dbname.Classification Where Classification_Number= $Classification_Number";
			$classification_check_result = mysqli_query($conn,$classification_check);
			$classification_check_count = mysqli_num_rows($classification_check_result);
				if($classification_check_count>0){
				$query2 = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) Select ClassificationID , $id from $dbname.Classification where Classification_Number = $Classification_Number";		
				$result2 = mysqli_query($conn,$query2); 	
					
				}else{
					if(strlen($Classification_Type) !=0){
						$query3 = "INSERT INTO $dbname.Classification (Classification_Number, Classification_Type) VALUES ('$Classification_Number','$Classification_Type')";	
						$result3 = mysqli_query($conn,$query3); 	
						$id1 =  mysqli_insert_id($conn);
						
						$queryC = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) VALUES ('$id1','$id')";		
						$resultC = mysqli_query($conn,$queryC); 
						
					}
					
					
				} */
		
		
		
		
		if (strlen($Classification_Number) !=0){
		/* 	Must check if Classification number exist 	*/
					
			$classification_check = "Select * From $dbname.Classification Where Classification_Number= $Classification_Number";
			$classification_check_result = mysqli_query($conn,$classification_check);
			$classification_check_count = mysqli_num_rows($classification_check_result);
				if($classification_check_count>0){
				$query2 = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) Select ClassificationID , $id from $dbname.Classification where Classification_Number = $Classification_Number";		
				$result2 = mysqli_query($conn,$query2); 	
					
				}							
			
		}
			
			
}
		}
					
		}
		}
		
	}

	//echo "<h3> Number of product skipped $count_skipped</h3>";
	echo "<h2>Skipped Market Share</h2>";
   while (!$skipped_sales->isEmpty()) { 
                            
        $senditem = $skipped_sales->shift(); 
		if(strlen ($senditem) < 1) continue;
		echo "$senditem <br>";
   }
	echo "<h2>New Products</h2>";
   while (!$new_product->isEmpty()) { 
                            
        $senditem = $new_product->shift(); 
		if(strlen ($senditem) < 1) continue;
		echo "$senditem <br>";
   }	
	echo "<h2>Market Share Linked to Existing Product</h2>";
   while (!$linked_sales->isEmpty()) { 
                            
        $senditem = $linked_sales->shift(); 
		if(strlen ($senditem) < 1) continue;
		echo "$senditem <br>";
   }	
	}else { 
	echo "Unable to read the file";

	}
	
	fclose($handle);

	print "Import done";

	//view upload form
}else {

	//print "Upload new csv by browsing to file and clicking on Upload<br/>\n";

	

}


	
	
	
?>
	
	
	
	
	
	
	
	
	