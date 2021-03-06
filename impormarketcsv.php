<?php include 'connection.php';?>
<?php


         // Proceed to process the form data



		$allowed =  array('csv');		
		$tmpfname = $_FILES['file_save']['tmp_name'];
		$ext = pathinfo($_FILES['file_save']['name'], PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
		echo "<h3>Selected File is Not a CSV file</h3>";

	
		} else{ 
	 
		$count_skipped = 0;
		$skipped_sales = new SplQueue();
		$skipped_market_share = 0;
		$new_product   = new SplQueue();
		$new_product_count = 0;
		$linked_sales  = new SplQueue();
		$count = 0;	
		$market_share_linked = 0;
		$duplicate_market_share = new SplQueue();
		$duplicate_count = 0;
		$count_row=0;

  

try {
$conn->autocommit(FALSE);

 $Username = $_SESSION['currentuser']; 
 $handle = fopen($_FILES['file_save']['tmp_name'], "r");
    while (($data = fgetcsv($handle, ",")) !== FALSE) {

    ++$count;
    if($count>1){
  
	
			//echo "in<br>";
			//$data = 
			$Record                    = $data[0]; //(empty($data[0]) && strlen($data[0]) == 0 ?NULL :$data[0]);
			$Sales_UPC                 = $data[1];
			$Sales_Description         = $data[2];
			$Brand                     = $data[3];
			$Manufacturer              = $data[4];
			//$Package_Size            = 
			$Rank                      = (empty($data[5]) && strlen($data[5]) == 0 ?NULL :$data[5]);
			$Dollar_Volume             = str_replace(",", "",(empty($data[6]) && strlen($data[6]) == 0 ?NULL :$data[6])); //str_replace(",", "", $data[8])
			$Shr                       = (empty($data[7]) && strlen($data[7]) == 0 ?NULL :$data[7]);
			$Vol_PerCent_Change        = (empty($data[8]) && strlen($data[8]) == 0 ?NULL :$data[8]);
			$Kilo_Vol                  = (empty($data[9]) && strlen($data[9]) == 0 ?NULL :$data[9]);
			$Kilo_Shr                  = (empty($data[10]) && strlen($data[10]) == 0 ?NULL :$data[10]);
			$Kilo_Vol_PerCent_Change   = (empty($data[11]) && strlen($data[11]) == 0 ?NULL :$data[11]);
			$Avg_AC_Disk               = (empty($data[12]) && strlen($data[12]) == 0 ?NULL :$data[12]);
			$Ave_Retail_Unit_Price     = (empty($data[13]) && strlen($data[13]) == 0 ?NULL :$data[13]);
			$Source                    = $data[14];
			$Nielsen_Category          = $data[15];
		
			$Collection_Date           = (empty($data[16]) && strlen($data[16]) == 0 ?NULL :$data[16]);
			$Sales_Year                = (empty($data[17]) && strlen($data[17]) == 0 ?NULL :$data[17]);
			$Control_Label             = $data[18];
			$Kilo_Vol_Total            = (empty($data[19]) && strlen($data[19]) == 0 ?NULL :$data[19]);
			$Kilo_Rank             = (empty($data[20]) && strlen($data[20]) == 0 ?NULL :$data[20]);
			$Dollar_Volume_Total       = (empty($data[21]) && strlen($data[21]) == 0 ?NULL :$data[21]);
			$Cluster_Number            = (empty($data[22]) && strlen($data[22]) == 0 ?NULL :$data[22]);
			$Product_Grouping          = (empty($data[23]) && strlen($data[23]) == 0 ?NULL :$data[23]);
			$Product_Description       = (empty($data[24]) && strlen($data[24]) == 0 ?NULL :$data[24]);
			$Classification_Number     = (empty($data[25]) && strlen($data[25]) == 0 ?NULL :$data[25]);
			$Classification_Type       = $data[26];
			$Comments                  = $data[27];

			$Control_Label = ($Control_Label==0?'No':'Yes');
			
			
			if ($Sales_UPC == null or $Sales_Description == null or $Kilo_Vol == null or $Source == null or $Sales_Year == null or $Collection_Date == null) {


					$inputX = "Record : $Record, $Sales_UPC, $Sales_Description ";
					$skipped_sales->push($inputX);
					++$skipped_market_share;
					continue;
				

			} else {

							$query_duplicate =<<<EOQ
SELECT SalesID 
FROM Sales
WHERE Sales_UPC = ? AND Sales_Description = ? AND Collection_Date = ? AND Kilo_Vol = ?

EOQ;

				$stmt_duplicate = $conn->prepare($query_duplicate);
				$stmt_duplicate->bind_param("sssd", $Sales_UPC,$Sales_Description, $Collection_Date,$Kilo_Vol);
				$stmt_duplicate->execute();
				$stmt_duplicate->store_result();
					if (($stmt_duplicate->num_rows) > 0 ){

					$input_dup = "Record : $Record, $Sales_Description";
					$duplicate_market_share->push($input_dup);	
					++$duplicate_count;
						//duplicate_label
				}else{



				if (is_numeric  ($Product_Grouping)) {

				
				
					/* Check if grouping already exists in Market Share table */
					$check_grouping =<<<EOQ
SELECT *
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;
// AND ProductIDS <> (Select Distinct ProductIDS From $dbname.Sales Where Product_Grouping= $Product_Grouping)";

					$stmt = $conn->prepare($check_grouping);
					$stmt->bind_param("s", $Sales_UPC);
					$result_grouping = $stmt->execute();
					$stmt->store_result();

					if (($stmt->num_rows) > 0) {

					$param = array(
							$Sales_UPC,
							$Sales_Description,
							$Brand,
							$Manufacturer,
							$Rank,
							$Dollar_Volume,
							$Shr,
							$Vol_PerCent_Change,
							$Kilo_Vol,
							$Kilo_Shr,
							$Kilo_Vol_PerCent_Change,
							$Avg_AC_Disk,
							$Ave_Retail_Unit_Price,
							$Source,
							$Nielsen_Category,
							$Collection_Date,
							$Sales_Year,
							$Control_Label,
							$Kilo_Vol_Total,
							$Dollar_Volume_Total,
							$Cluster_Number,
							$Product_Grouping,
							$Product_Description,
							$Comments
							
							
							
						); 
 



						$insert_query =<<<EOQ
INSERT INTO Sales (
							ProductIDS,
							Sales_UPC,
							Sales_Description,
							Brand,
							Manufacturer,
							Dollar_Rank,
							Dollar_Volume,
							Dollar_Share,
							Dollar_Volume_PerCentage_Change,
							Kilo_Vol,
							Kilo_Share,
							Kilo_Volume_Percent_Change,
							Average_AC_Dist,
							Average_Retail_Price,
							Source,
							Nielsen_Category,
							Collection_Date,
							Sales_Year,
							Control_Label_Flag,
							Kilo_Volume_Total,
							Dollar_Volume_Total,
							Cluster_Number,
							Product_Grouping,
							Comments,
							Kilo_Rank,
							Classification_Number,
							Classification_Type,
							Last_Edited_By  
)
SELECT DISTINCT ProductIDS, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;
				

						$stmt = $conn->prepare($insert_query);
						$stmt->bind_param("sssssddddddddsssisdddsssdsss", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[23],$Kilo_Rank,$Classification_Number,$Classification_Type,$Username, $Sales_UPC);
						$result_insert = $stmt->execute();
						++$market_share_linked;
			//			
					//	if (!empty($Product_Description) && strlen($Product_Description) != 0) {


			/*Update other fields    !ctype_space($_POST[$field])
						$Brand                     = $data[3];
			$Manufacturer              = $data[4]; $Cluster_Number 
			
			*/

if (!empty($Product_Description) && strlen($Product_Description) != 0 && !ctype_space($Product_Description)){

							$query_update =<<<EOQ
UPDATE Product
   SET Description = ?, Last_Edited_By = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt = $conn->prepare($query_update);
							$stmt->bind_param("sss", $Product_Description,$Username, $Sales_UPC);
							$result_update = $stmt->execute();
}

if (!empty($Brand) && strlen($Brand) != 0 && !ctype_space($Brand)){
							$query_update1 =<<<EOQ
UPDATE Product
   SET Brand = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt1 = $conn->prepare($query_update1);
							$stmt1->bind_param("ss", $Brand, $Sales_UPC);
							$stmt1->execute();


}


if (!empty($Manufacturer) && strlen($Manufacturer) != 0 && !ctype_space($Manufacturer)){

				$query_update2 =<<<EOQ
UPDATE Product
   SET Manufacturer = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt2 = $conn->prepare($query_update2);
							$stmt2->bind_param("ss", $Manufacturer, $Sales_UPC);
							$stmt2->execute();

}

if (!empty($Cluster_Number) && strlen($Cluster_Number) != 0 && !ctype_space($Cluster_Number)){
				$query_update3 =<<<EOQ
UPDATE Product
   SET Cluster_Number = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt3 = $conn->prepare($query_update3);
							$stmt3->bind_param("ss", $Cluster_Number, $Sales_UPC);
							$stmt3->execute();


}


if (!empty($Classification_Number) && strlen($Classification_Number) != 0 && !ctype_space($Classification_Number)){

			$stmt_classification = $conn->prepare("Select * From Classification Where Classification_Number= ?");		
			$stmt_classification->bind_param("d", $Classification_Number);
			$result_c = $stmt_classification->execute();
			$stmt_classification->store_result();
				if(($stmt_classification->num_rows)>0){
				//$check_if_in = $conn->prepare("Select * From Product_Classification Where ClassificationID =(Select ClassificationID From Classification where Classification_Number =?)");						
			
			//echo "YES EXIST";
					$check_if_in = $conn->prepare("
				

  Select one.ClassificationID, two.ProductID FROM (
SELECT C.ClassificationID, 'a' AS id from Classification C WHERE C.Classification_Number = ? 
) AS one JOIN (
Select ProductID, 'a' AS id from Product_Classification where ProductID = (Select Distinct ProductIDS from Sales Where Sales_UPC = ?) 
) AS two ON one.id = two.id 
  
				
				");	
			
			
			
				$check_if_in->bind_param("ds", $Classification_Number, $Sales_UPC);		
				$check_if_in_r = $check_if_in->execute();
				$check_if_in->store_result();
				if(($check_if_in->num_rows)>0){
				//	echo "YES EXIST 2";
						$classification_update = $conn->prepare("UPDATE Product_Classification SET ClassificationID=(Select ClassificationID From Classification where Classification_Number =?) Where ProductID = (SELECT DISTINCT ProductIDS FROM Sales WHERE Sales_UPC = ?)");		
	
						$classification_update->bind_param("ds",$Classification_Number, $Sales_UPC);
						$classification_update_result = $classification_update->execute();

				}else{

				

	$query2 =<<<EOQ

INSERT INTO Product_Classification (ClassificationID, ProductID)
Select one.ClassificationID, two.ProductID FROM (
SELECT C.ClassificationID,'a' AS id from Classification C  WHERE C.Classification_Number = ? 
) AS one JOIN (
Select ProductID, 'a' AS id from Product where ProductID = (Select Distinct ProductIDS from Sales Where Sales_UPC = ?) 
) AS two ON one.id = two.id 
EOQ;

								$stmt = $conn->prepare($query2);
									$stmt->bind_param("ds", $Classification_Number,$Sales_UPC);
									$result2 = $stmt->execute();

								}

				}





}						

						$input3= "Record : $Record, $Sales_Description";
						$linked_sales->push($input3);

					} else {

						$grouping =<<<EOQ
SELECT *
  FROM Sales
 WHERE Product_Grouping = ?
EOQ;

						$stmt = $conn->prepare($grouping);
						$stmt->bind_param("s", $Product_Grouping);
						$check_grouping_result = $stmt->execute();
						$stmt->store_result();

						if (($stmt->num_rows) > 0) {
	
					
					$param = array(
							$Sales_UPC,
							$Sales_Description,
							$Brand,
							$Manufacturer,
							$Rank,
							$Dollar_Volume,
							$Shr,
							$Vol_PerCent_Change,
							$Kilo_Vol,
							$Kilo_Shr,
							$Kilo_Vol_PerCent_Change,
							$Avg_AC_Disk,
							$Ave_Retail_Unit_Price,
							$Source,
							$Nielsen_Category,
							$Collection_Date,
							$Sales_Year,
							$Control_Label,
							$Kilo_Vol_Total,
							$Dollar_Volume_Total,
							$Cluster_Number,
							$Product_Grouping,
							$Product_Description,
							$Comments
														
						); 

							/* Grouping exist, so link market share to that product*/
							$insert_query22 =<<<EOQ
INSERT INTO Sales (
							ProductIDS,
							Sales_UPC,
							Sales_Description,
							Brand,
							Manufacturer,
							Dollar_Rank,
							Dollar_Volume,
							Dollar_Share,
							Dollar_Volume_PerCentage_Change,
							Kilo_Vol,
							Kilo_Share,
							Kilo_Volume_Percent_Change,
							Average_AC_Dist,
							Average_Retail_Price,
							Source,
							Nielsen_Category,
							Collection_Date,
							Sales_Year,
							Control_Label_Flag,
							Kilo_Volume_Total,
							Dollar_Volume_Total,
							Cluster_Number,
							Product_Grouping,
							Comments,
							Kilo_Rank,
							Classification_Number,
							Classification_Type,
							Last_Edited_By   
)
SELECT DISTINCT ProductIDS, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Sales
 WHERE Product_Grouping = ?
EOQ;


							$stmt = $conn->prepare($insert_query22);
						$stmt->bind_param("sssssddddddddsssisdddsssdsss", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[23],$Kilo_Rank,$Classification_Number,$Classification_Type,$Username, $Product_Grouping);
							$result_insert = $stmt->execute();
							if($result_insert) {
								++$market_share_linked;
							$input4 = "Record : $Record, $Sales_Description";
							$linked_sales->push($input4);
}
if (!empty($Product_Description) && strlen($Product_Description) != 0 && !ctype_space($Product_Description)){						
			
								$query_update =<<<EOQ
UPDATE Product
   SET Description = ?, Last_Edited_By = ?
 WHERE ProductID = (
       SELECT DISTINCT ProductIDS
         FROM Sales
        WHERE Product_Grouping = ?
)
EOQ;

								$stmt = $conn->prepare($query_update);
								$stmt->bind_param("sss", $Product_Description,$Username, $Product_Grouping);
								$result_update = $stmt->execute();
}

if (!empty($Brand) && strlen($Brand) != 0 && !ctype_space($Brand)){
								
								$query_update1 =<<<EOQ
UPDATE Product
   SET Brand = ?
 WHERE ProductID = (
       SELECT DISTINCT ProductIDS
         FROM Sales
        WHERE Product_Grouping = ?
)
EOQ;

								$stmt1 = $conn->prepare($query_update1);
								$stmt1->bind_param("ss", $Brand, $Product_Grouping);
								$result_update = $stmt1->execute();

}
if (!empty($Manufacturer) && strlen($Manufacturer) != 0 && !ctype_space($Manufacturer)){

								$query_update2 =<<<EOQ
UPDATE Product
   SET Manufacturer = ?
 WHERE ProductID = (
       SELECT DISTINCT ProductIDS
         FROM Sales
        WHERE Product_Grouping = ?
)
EOQ;

								$stmt2 = $conn->prepare($query_update2);
								$stmt2->bind_param("ss", $Manufacturer, $Product_Grouping);
								$result_update = $stmt2->execute();

}

if (!empty($Cluster_Number) && strlen($Cluster_Number) != 0 && !ctype_space($Cluster_Number)){

								$query_update3 =<<<EOQ
UPDATE Product
   SET Cluster_Number = ?
 WHERE ProductID = (
       SELECT DISTINCT ProductIDS
         FROM Sales
        WHERE Product_Grouping = ?
)
EOQ;

								$stmt3 = $conn->prepare($query_update3);
								$stmt3->bind_param("ss", $Cluster_Number, $Product_Grouping);
								$result_update = $stmt3->execute();

}

if (!empty($Classification_Number) && strlen($Classification_Number) != 0 && !ctype_space($Classification_Number)){

			$stmt_classification = $conn->prepare("Select * From Classification Where Classification_Number= ?");		
			$stmt_classification->bind_param("d", $Classification_Number);
			$result_c = $stmt_classification->execute();
			$stmt_classification->store_result();
				if(($stmt_classification->num_rows)>0){


				//$check_if_in = $conn->prepare("Select * From Product_Classification Where ClassificationID =(Select ClassificationID From Classification where Classification_Number =?)");						
		
		$check_if_in = $conn->prepare("
  Select one.ClassificationID, two.ProductID FROM (
SELECT C.ClassificationID, 'a' AS id from Classification C WHERE C.Classification_Number = ? 
) AS one JOIN (
Select ProductID, 'a' AS id from Product_Classification where ProductID = (Select Distinct ProductIDS from Sales Where Product_Grouping = ?) 
) AS two ON one.id = two.id 

				
				");		
				
				
				
				
				$check_if_in->bind_param("ds", $Classification_Number,$Product_Grouping);		
				$check_if_in_r = $check_if_in->execute();
				$check_if_in->store_result();
				if(($check_if_in->num_rows)>0){
						$classification_update = $conn->prepare("UPDATE Product_Classification SET ClassificationID=(Select ClassificationID From Classification where Classification_Number =?) Where ProductID = (SELECT DISTINCT ProductIDS FROM Sales WHERE Product_Grouping = ?)");		
	
						$classification_update->bind_param("di",$Classification_Number, $Product_Grouping);
						$classification_update_result = $classification_update->execute();

				}else{

				
	$query2 =<<<EOQ

INSERT INTO Product_Classification (ClassificationID, ProductID)
Select one.ClassificationID, two.ProductID FROM (
SELECT C.ClassificationID, 'a' AS id from Classification C   WHERE C.Classification_Number = ? 
) AS one JOIN (
Select ProductID, 'a' AS id from Product where ProductID = (Select Distinct ProductIDS from Sales Where Sales_UPC = ?) 
) AS two ON one.id = two.id 
EOQ;

								$stmt = $conn->prepare($query2);
									$stmt->bind_param("ds", $Classification_Number,$Sales_UPC);
									$result2 = $stmt->execute();

								}

				}





}						

							

							//echo "$insert_query";


						} else if (($stmt->num_rows) < 1)  {

							/* Create a new Product */

							if (empty($Product_Description) && strlen($Product_Description) == 0) {
								$Product_Description = $Sales_Description;
							}

							$param = array($Product_Description, $Brand, $Manufacturer, $Cluster_Number);

							$query =<<<EOQ
INSERT INTO Product (
       Description,
       Brand,
       Manufacturer,
       Cluster_Number,
	   Last_Edited_By
)
VALUES (?, ?, ?, ?, ?)
EOQ;
							$stmt = $conn->prepare($query);
							$stmt->bind_param("sssds", $param[0], $param[1], $param[2], $param[3], $Username);
							$result = $stmt->execute();

							$id = mysqli_insert_id($conn);
							$input5 = "Record : $Record, $Product_Description";
							$new_product->push($input5);

					$param = array(
							$id,
							$Sales_UPC, 
							$Sales_Description,
							$Brand,
							$Manufacturer,
							$Rank,
							$Dollar_Volume,
							$Shr,
							$Vol_PerCent_Change,
							$Kilo_Vol,
							$Kilo_Shr,
							$Kilo_Vol_PerCent_Change,
							$Avg_AC_Disk,
							$Ave_Retail_Unit_Price,
							$Source,
							$Nielsen_Category,
							$Collection_Date,
							$Sales_Year,
							$Control_Label,
							$Kilo_Vol_Total,
							$Dollar_Volume_Total,
							$Cluster_Number,
							$Product_Grouping,
							$Product_Description,
							$Classification_Number,
							$Classification_Type,
							$Comments				
						); 


							$insert_query2 =<<<EOQ
INSERT INTO Sales (			

							SalesID,
							ProductIDS,
							Sales_UPC,
							Sales_Description,
							Brand,
							Manufacturer,
							Dollar_Rank,
							Dollar_Volume,
							Dollar_Share,
							Dollar_Volume_PerCentage_Change,
							Kilo_Vol,
							Kilo_Share,
							Kilo_Volume_Percent_Change,
							Average_AC_Dist,
							Average_Retail_Price,
							Source,
							Nielsen_Category,
							Collection_Date,
							Sales_Year,
							Control_Label_Flag,
							Kilo_Volume_Total,
							Dollar_Volume_Total,
							Cluster_Number,
							Product_Grouping,
							Comments,
							Kilo_Rank,
							Classification_Number,
							Classification_Type,
							Last_Edited_By   
							
)
VALUES ( NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?)
EOQ;
/*Update other fields*/ 
							$stmt = $conn->prepare($insert_query2);
							$stmt->bind_param("isssssddddddddsssisdddsssdss", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[26],$Kilo_Rank,$Classification_Number,$Classification_Type,$Username);
							$result_insert = $stmt->execute();
							if ($result_insert) {
								++$new_product_count;
							}


							//$query2 = "INSERT INTO  $dbname.Classification (Number, Classification_Name, _Type) VALUES ('$classificationid', '$classification_name', '$type')";
							//$query1_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount_sold', '$energy_unit_sold', '$energy_dvalue_sold', TRUE from $dbname.Package where UPC12 = '$UPC12'";
							if (strlen($Classification_Number) != 0) {
								/* 		Must check if Classification number exist */

								$classification_check =<<<EOQ
SELECT *
  FROM Classification
 WHERE Classification_Number = ?
EOQ;
								$stmt = $conn->prepare($classification_check);
								$stmt->bind_param("d", $Classification_Number);
								$classification_check_result = $stmt->execute();
								$stmt->store_result();

								if ($stmt->num_rows > 0) {

									$query2 =<<<EOQ
INSERT INTO Product_Classification (ClassificationID, ProductID)
SELECT ClassificationID, ?
  FROM Classification
 WHERE Classification_Number = ?
EOQ;

									$stmt = $conn->prepare($query2);
									$stmt->bind_param("id", $id, $Classification_Number);
									$result2 = $stmt->execute();

								} /*else {
									if (strlen($Classification_Type) != 0) {

										$query3 =<<<EOQ
INSERT INTO Classification (Classification_Number, Classification_Type)
VALUES (?, ?)
EOQ;

										$stmt = $conn->prepare($query3);
										$stmt->bind_param("ds", $Classification_Number, $Classification_Type);
										$result3 = $stmt->execute();

										$id1 =  mysqli_insert_id($conn);

										$queryC =<<<EOQ
INSERT INTO Product_Classification (ClassificationID, ProductID)
VALUES (?, ?)
EOQ;

										$stmt = $conn->prepare($queryC);
										$stmt->bind_param("ii", $id1, $id);
										$resultC = $stmt->execute();

									}
								} */
							}
						}
					}
				}
				else if (!is_numeric ($Product_Grouping)) {
					
					
					
					


						if (empty($Product_Description) && strlen($Product_Description) == 0) {
							$Product_Description = $Sales_Description;
						}
						
/* 						$state =<<<EOQ
SELECT * FROM Sales WHERE Sales_UPC = ?
EOQ; */

$query = " SELECT * FROM Sales where Sales_UPC = $Sales_UPC";
$result3 = mysqli_query($conn,$query);	

// AND ProductIDS <> (Select Distinct ProductIDS From $dbname.Sales Where Product_Grouping= $Product_Grouping)";
/* 
						$stmt2 = $conn->prepare($state);
						$stmt2->bind_param("i", $Sales_UPC);
						$result_state = $stmt2->execute();
						$stmt2->store_result(); */

						if (mysqli_num_rows($result3) > 0) {

					$param = array(
							$Sales_UPC,
							$Sales_Description,
							$Brand,
							$Manufacturer,
							$Rank,
							$Dollar_Volume,
							$Shr,
							$Vol_PerCent_Change,
							$Kilo_Vol,
							$Kilo_Shr,
							$Kilo_Vol_PerCent_Change,
							$Avg_AC_Disk,
							$Ave_Retail_Unit_Price,
							$Source,
							$Nielsen_Category,
							$Collection_Date,
							$Sales_Year,
							$Control_Label,
							$Kilo_Vol_Total,
							$Dollar_Volume_Total,
							$Cluster_Number,
							$Product_Grouping,
							$Product_Description,
							$Classification_Number,
							$Classification_Type,
							$Comments
							
							
							
						); 
							$insert_query =<<<EOQ
INSERT INTO Sales (
							ProductIDS,
							Sales_UPC,
							Sales_Description,
							Brand,
							Manufacturer,
							Dollar_Rank,
							Dollar_Volume,
							Dollar_Share,
							Dollar_Volume_PerCentage_Change,
							Kilo_Vol,
							Kilo_Share,
							Kilo_Volume_Percent_Change,
							Average_AC_Dist,
							Average_Retail_Price,
							Source,
							Nielsen_Category,
							Collection_Date,
							Sales_Year,
							Control_Label_Flag,
							Kilo_Volume_Total,
							Dollar_Volume_Total,
							Cluster_Number,
							Product_Grouping,
							Comments,
							Kilo_Rank,
							Classification_Number,
							Classification_Type,
							Last_Edited_By
)
SELECT DISTINCT ProductIDS, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;



							$stmt = $conn->prepare($insert_query);
						$stmt->bind_param("sssssddddddddsssisdddsssdsss", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[25],$Kilo_Rank,$Classification_Number,$Classification_Type,$Username, $Sales_UPC);
							$result_insert = $stmt->execute();

			/*Update other fields*/
if (!empty($Product_Description) && strlen($Product_Description) != 0 && !ctype_space($Product_Description)){	
							$query_update =<<<EOQ
UPDATE Product
   SET Description = ?, Last_Edited_By = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt = $conn->prepare($query_update);
							$stmt->bind_param("sss", $Product_Description,$Username, $Sales_UPC);
							$result_update = $stmt->execute();
}
if (!empty($Brand) && strlen($Brand) != 0 && !ctype_space($Brand)){
							$query_update1 =<<<EOQ
UPDATE Product
   SET Brand = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt1 = $conn->prepare($query_update1);
							$stmt1->bind_param("ss", $Brand, $Sales_UPC);
							$stmt1->execute();


}
if (!empty($Manufacturer) && strlen($Manufacturer) != 0 && !ctype_space($Manufacturer)){

				$query_update2 =<<<EOQ
UPDATE Product
   SET Manufacturer = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt2 = $conn->prepare($query_update2);
							$stmt2->bind_param("ss", $Manufacturer, $Sales_UPC);
							$stmt2->execute();

}

if (!empty($Cluster_Number) && strlen($Cluster_Number) != 0 && !ctype_space($Cluster_Number)){
				$query_update3 =<<<EOQ
UPDATE Product
   SET Cluster_Number = ?
 WHERE ProductID = (
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
)
EOQ;

							$stmt3 = $conn->prepare($query_update3);
							$stmt3->bind_param("ss", $Cluster_Number, $Sales_UPC);
							$stmt3->execute();


}		

			

if (!empty($Classification_Number) && strlen($Classification_Number) != 0 && !ctype_space($Classification_Number)){

			$stmt_classification = $conn->prepare("Select * From Classification Where Classification_Number= ?");		
			$stmt_classification->bind_param("d", $Classification_Number);
			$result_c = $stmt_classification->execute();
			$stmt_classification->store_result();
				if(($stmt_classification->num_rows)>0){



//echo "YESOO";
		$check_if_in2 = $conn->prepare("
				

  Select one.ClassificationID, two.ProductID FROM (
SELECT C.ClassificationID, 'a' AS id from Classification C WHERE C.Classification_Number = ? 
) AS one JOIN (
Select ProductID, 'a' AS id from Product_Classification where ProductID = (Select Distinct ProductIDS from Sales Where Sales_UPC = ?) 
) AS two ON one.id = two.id 
  
				
				");						
				$check_if_in2->bind_param("ds", $Classification_Number,$Sales_UPC);		
				$check_if_in_r = $check_if_in2->execute();

				$check_if_in2->store_result();
				if(($check_if_in2->num_rows)>0){

				
						$classification_update = $conn->prepare("UPDATE Product_Classification SET ClassificationID=(Select ClassificationID From Classification where Classification_Number =?) Where ProductID = (SELECT DISTINCT ProductIDS FROM Sales WHERE Sales_UPC = ?)");		
	
						$classification_update->bind_param("ds",$Classification_Number, $Sales_UPC);
						$classification_update_result = $classification_update->execute();


				}else{


				
	$query2 =<<<EOQ

INSERT INTO Product_Classification (ClassificationID, ProductID)
Select one.ClassificationID, two.ProductID FROM (
SELECT C.ClassificationID, 'a' AS id from Classification C WHERE C.Classification_Number = ? 
) AS one JOIN (
Select ProductID, 'a' AS id from Product where ProductID = (Select Distinct ProductIDS from Sales Where Sales_UPC = ?) 
) AS two ON one.id = two.id 
EOQ;

								$stmt = $conn->prepare($query2);
									$stmt->bind_param("ds", $Classification_Number,$Sales_UPC);
									$result2 = $stmt->execute();


			}

				}else{
					//echo "Class doesnt exist";
				}

				}









							++$market_share_linked;
							$input7 = "Record : $Record, $Sales_Description";
							$linked_sales->push($input7);
							continue;
						} else {
							$query =<<<EOQ
INSERT INTO Product (Description, Brand, Manufacturer, Cluster_Number,Last_Edited_By) VALUES (?, ?, ?, ?, ?)
EOQ;
//$Username Last_Edited_By
							$stmt = $conn->prepare($query);
							$stmt->bind_param("sssds", $Product_Description, $Brand, $Manufacturer, $Cluster_Number,$Username);
							$result = $stmt->execute();

							$id =  mysqli_insert_id($conn);
							
					$param = array(
							$id,
							$Sales_UPC,
							$Sales_Description,
							$Brand,
							$Manufacturer,
							$Rank,
							$Dollar_Volume,
							$Shr,
							$Vol_PerCent_Change,
							$Kilo_Vol,
							$Kilo_Shr,
							$Kilo_Vol_PerCent_Change,
							$Avg_AC_Disk,
							$Ave_Retail_Unit_Price,
							$Source,
							$Nielsen_Category,
							$Collection_Date,
							$Sales_Year,
							$Control_Label,
							$Kilo_Vol_Total,
							$Dollar_Volume_Total,
							$Cluster_Number,
							$Product_Grouping,
							$Product_Description,
							$Classification_Number,
							$Classification_Type,
							$Comments
														
						); 

								$insert_queryt =<<<EOQ
INSERT INTO Sales (			

							SalesID,
							ProductIDS,
							Sales_UPC,
							Sales_Description,
							Brand,
							Manufacturer,
							Dollar_Rank,
							Dollar_Volume,
							Dollar_Share,
							Dollar_Volume_PerCentage_Change,
							Kilo_Vol,
							Kilo_Share,
							Kilo_Volume_Percent_Change,
							Average_AC_Dist,
							Average_Retail_Price,
							Source,
							Nielsen_Category,
							Collection_Date,
							Sales_Year,
							Control_Label_Flag,
							Kilo_Volume_Total,
							Dollar_Volume_Total,
							Cluster_Number,
							Product_Grouping,
							Comments,
							Kilo_Rank,
							Classification_Number,
							Classification_Type,
							Last_Edited_By  
							
							
)
VALUES ( NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOQ;


								$stmt = $conn->prepare($insert_queryt);
							$stmt->bind_param("ssssssddddddddsssisdddsssdss", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[26],$Kilo_Rank,$Classification_Number,$Classification_Type,$Username);
								$result_insertt = $stmt->execute();
								++$new_product_count;

							if (strlen($Classification_Number) != 0) {
								/* Must check if Classification number exist */

								$classification_check =<<<EOQ
SELECT *
  FROM Classification
 WHERE Classification_Number = ?
EOQ;

								$stmt = $conn->prepare($classification_check);
								$stmt->bind_param("d", $Classification_Number);
								$classification_check_result = $stmt->execute();

								$stmt->store_result();
								if (($stmt->num_rows) > 0) {


									
									
									$query2 =<<<EOQ
INSERT INTO Product_Classification (ClassificationID, ProductID)
SELECT ClassificationID, ?
  FROM Classification
 WHERE Classification_Number = ?
EOQ;

									$stmt = $conn->prepare($query2);
									$stmt->bind_param("id", $id, $Classification_Number);
									$result2 = $stmt->execute();






								}
							}	
							
							
							$in = "Record : $Record, $Product_Description";
							$new_product->push($in);



						}
					
				}
			}
	}
	
	
	

    }
	
} 


 //$skipped_market_share, $market_share_linked,new_product_count
$conn->commit();

$count = $count -1;
  echo "<h3>$count Records on the spreadsheet</h3>";

  echo "<hr style=\" border-top: 1px solid red;\">";

  echo "<h3>$skipped_market_share Market Share Skipped Because of Missing Mandatory Fields</h3>";
		while (!$skipped_sales->isEmpty()) {

			$senditem = $skipped_sales->shift();
			if (strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}
		  echo "<hr style=\" border-top: 1px solid red;\">";
  echo "<h3>$new_product_count New Product(s) created</h3>";
		while (!$new_product->isEmpty()) {

			$senditem = $new_product->shift();
			if (strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}
  echo "<hr style=\" border-top: 1px solid red;\">";
  echo "<h3>$market_share_linked Market Share Linked to Existing Product</h3>";
  		while (!$linked_sales->isEmpty()) {

			$senditem = $linked_sales->shift();
			if (strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		} 

	  echo "<hr style=\" border-top: 1px solid red;\">";	
		echo "<h3>$duplicate_count Duplicate(s) Market Share</h3> <br>";
		while (!$duplicate_market_share->isEmpty()) {

			$senditem = $duplicate_market_share->shift();
			if (strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}
		
		
		print "Import done";

		}catch(Exception $e){
				echo "An Error occured during import, could not complete the transaction";
	$conn->rollback();
		}


}

	  fclose($handle); 
  mysqli_close($conn);



?>
