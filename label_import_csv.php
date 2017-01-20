<?php include 'connection.php';?>
<?php
/* error_reporting(E_ALL);
ini_set('display_errors', 1);  */
//mysqli_query("SET NAMES 'utf8';");




			$allowed =  array('csv');		
		$tmpfname = $_FILES['file_save']['tmp_name'];
		$ext = pathinfo($_FILES['file_save']['name'], PATHINFO_EXTENSION);


	//	$num_rows = count($_FILES['file_save']['name']);

		if(!in_array($ext,$allowed) ) {
		echo "<h3>Selected File is Not a CSV file</h3>";

	
		} else{
	

		$count = 0;
		$skipped_label = new SplQueue();
		$skipped_count = 0;
		$new_product   = new SplQueue();
		$new_product_count = 0;
		$linked_sales  = new SplQueue();
		$linked_to_market_count = 0;
		$linked_label  = new SplQueue();
		$linked_to_label_count = 0;
		$duplicate_label  = new SplQueue();
		$duplicate_count = 0;
   $handle = fopen($_FILES['file_save']['tmp_name'], "r");
    while (($data = fgetcsv($handle, ",")) !== FALSE) {

    ++$count;
    if($count>1){
  
			$Record                                         = $data[0];

			$Label_UPC                                      = $data[1];

			$Neilsen_Item_Rank_UPC                          = $data[2];

			$Nielsen_Category                               = $data[3];
			$Label_Description                              = $data[4];
			$Brand                                          = $data[5];
			$Manufacturer                                   = $data[6];
			$Country                                        = $data[7];
			$Package_Size                                   = $data[8];

			$Package_Size_UofM                              = $data[9];
			$Number_Of_Units                                = $data[10];
			$Storage_Type                                   = $data[11];
			$Storage_Statement                              = $data[12];
			$Collection_Date                                = $data[13];
			$Health_Claim                                   = $data[14];
			$Nutrient_Claim                                 = $data[15];
			$Other_Package_Statement                        = $data[16];
			$Suggested_Direction                            = $data[17];
			$Ingredients                                    = $data[18];
			$Multipart                                      = $data[19];
			$Nutrition_Fact_Table                           = $data[20];
			$Common_Household_Measure                       = $data[21];
			$Per_Serving_Amount                             = $data[22];
			$Per_Serving_UofM                               = $data[23];
			$Per_Serving_Amount_PPD                         = $data[24];
			$Per_Serving_Amount_PPD_UofM                    = $data[25];
			$Comment                                        = $data[144];
			$Source                                         = $data[145];
			$Product_Description                            = $data[146];

			$Per_Serving_Amount=  (empty($Per_Serving_Amount) && strlen($Per_Serving_Amount) == 0 ?NULL :$Per_Serving_Amount);
			$Per_Serving_Amount_PPD =  (empty($Per_Serving_Amount_PPD) && strlen($Per_Serving_Amount_PPD) == 0 ?NULL :$Per_Serving_Amount_PPD);

			
			
			$Per_Serving_Energy_Kcal                        = $data[26];
			$Per_Serving_Energy_PPD_Kcal                    = $data[27];
			$Per_Serving_Energy_Kj                          = $data[28];
			$Per_Serving_Energy_PPD_Kj                      = $data[29];
			$Fat_Per_Serving                                = $data[30];
			$Fat_Daily_Value                                = $data[31];
			/* added */                                       
			$Fat_Daily_Value_PPD                            = $data[32];
			$Saturated_Fat_Per_Serving                      = $data[33];
			$Trans_Fat_Per_Serving                          = $data[34];
			$Trans_And_Saturated_Fat_Daily_Vaue             = $data[35];
			/* added */                                       
			$Trans_And_Saturated_Fat_Daily_Vaue_PPD         = $data[36];
			$Fat_PolyUnsaturated                            = $data[37];
			$Omega_6_Per_Serving                            = $data[38];
			$Omega_3_Per_Serving                            = $data[39];
			$Fat_Monounsaturated_Per_Serving                = $data[40];
			$Carbohydrates_Per_Serving                      = $data[41];
			$Carbohydrates_Daily_Value                      = $data[42];
			/* added */                                     
			$Carbohydrates_Daily_Value_PPD                  = $data[43];
			$Fibre_Per_Serving                              = $data[44];
			$Fibre_Daily_Value                              = $data[45];
			/* added */                                      
			$Fibre_Daily_Value_PPD                          = $data[46];
			$Soluble_Fibre_Per_Serving                      = $data[47];
			$Insoluble_Fibre_Per_Serving                    = $data[48];
			$Sugar_Per_Serving                              = $data[49];
			$Sugar_Daily_Value                              = $data[50];
			/* added */                                      
			$Sugar_Daily_Value_PPD                          = $data[51];
			$Sugar_Alcohols_Per_Serving                     = $data[52];
			$Starch_Per_Serving                             = $data[53];
			$Protein_Per_Serving                            = $data[54];
			$Cholesterol_Per_Serving                        = $data[55];
			$Cholesterol_Daily_Value                        = $data[56];
			/* added */                                      
			$Cholesterol_Daily_Value_PPD                    = $data[57];
			$Sodium_Per_Serving                             = $data[58];
			$Sodium_Daily_Value                             = $data[59];
			/* added */                                     
			$Sodium_Daily_Value_PPD                         = $data[60];
			$Potassium_Per_Serving                          = $data[61];
			$Potassium_Daily_Value                          = $data[62];
			/* added */                                      
			$Potassium_Daily_Value_PPD                      = $data[63];
			$Calcium_Per_Serving                            = $data[64];
			$Calcium_Daily_Value                            = $data[65];
			/* added */                                       
			$Calcium_Daily_Value_PPD                        = $data[66];
			$Iron_Per_Serving                               = $data[67];
			$Iron_Daily_Value                               = $data[68];
			/* added */                                      
			$Iron_Daily_Value_PPD                           = $data[69];
			$VitaminA_Per_Serving                           = $data[70];
			$VitaminA_Daily_Value                           = $data[71];
			/* added */                                       
			$VitaminA_Daily_Value_PPD                       = $data[72];
			$VitaminC_Per_Serving                           = $data[73];
			$VitaminC_Daily_Value                           = $data[74];
			/* added */                                     
			$VitaminC_Daily_Value_PPD                       = $data[75];
			$VitaminD_Per_Serving                           = $data[76];
			$VitaminD_Daily_Value                           = $data[77];
			/* added */                                      
			$VitaminD_Daily_Value_PPD                       = $data[78];
			$VitaminE_Per_Serving                           = $data[79];
			$VitaminE_Daily_Value                           = $data[80];
			/* added */                                    
			$VitaminE_Daily_Value_PPD                       = $data[81];
			$VitaminK_Per_Serving                           = $data[82];
			$VitaminK_Daily_Value                           = $data[83];
			/* added */                                      
			$VitaminK_Daily_Value_PPD                       = $data[84];
			$Thiamine_Per_Serving                           = $data[85];
			$Thiamine_Daily_Value                           = $data[86];
			/* added */                                       
			$Thiamine_Daily_Value_PPD                       = $data[87];
			$Riboflavin_Per_Serving                         = $data[88];
			$Riboflavin_Daily_Value                         = $data[89];
			/* added */                                     
			$Riboflavin_Daily_Value_PPD                     = $data[90];
			$Niacin_Per_Serving                             = $data[91];
			$Niacin_Daily_Value                             = $data[92];
			/* added */                                      
			$Niacin_Daily_Value_PPD                         = $data[93];
			$VitaminB6_Per_Serving                          = $data[94];
			$VitaminB6_Daily_Value                          = $data[95];
			/* added */                                     
			$VitaminB6_Daily_Value_PPD                      = $data[96];
			$Folate_Per_Serving                             = $data[97];
			$Folate_Daily_Value                             = $data[98];
			/* added */                                      
			$Folate_Daily_Value_PPD                         = $data[99];
			$VitaminB12_Per_Serving                         = $data[100];
			$VitaminB12_Daily_Value                         = $data[101];
			/* added */                                      
			$VitaminB12_Daily_Value_PPD                     = $data[102];
			$Biotin_PerServing                              = $data[103];
			$Biotin_Daily_Value                             = $data[104];
			/* added */                                     
			$Biotin_Daily_Value_PPD                         = $data[105];
			$Choline_Per_Serving                            = $data[106];
			$Choline_Daily_Value                            = $data[107];
			/* added */                                       
			$Choline_Daily_Value_PPD                        = $data[108];
			$Pantothenate_Per_Serving                       = $data[109];
			$Pantothenate_Daily_Value                       = $data[110];
			/* added */                                      
			$Pantothenate_Daily_Value_PPD                   = $data[111];
			$Phosphorus_Per_Serving                         = $data[112];
			$Phosphorus_Daily_Value                         = $data[113];
			/* added */                                      
			$Phosphorus_Daily_Value_PPD                     = $data[114];
			$Iodide_Per_Serving                             = $data[115];
			$Iodide_Daily_Value                             = $data[116];
			/* added */                                      
			$Iodide_Daily_Value_PPD                         = $data[117];
			$Magnesium_Per_Serving                          = $data[118];
			$Magnesium_Daily_Value                          = $data[119];
			/* added */                                      
			$Magnesium_Daily_Value_PPD                      = $data[120];
			$Zinc_Per_Serving                               = $data[121];
			$Zinc_Daily_Value                               = $data[122];
			/* added */                                      
			$Zinc_Daily_Value_PPD                           = $data[123];
			$Selenium_Per_Serving                           = $data[124];
			$Selenium_Daily_Value                           = $data[125];
			/* added */                                       
			$Selenium_Daily_Value_PPD                       = $data[126];
			$Copper_Per_Serving                             = $data[127];
			$Copper_Daily_Value                             = $data[128];
			/* added */                                       
			$Copper_Daily_Value_PPD                         = $data[129];
			$Manganese_Per_Serving                          = $data[130];
			$Manganese_Daily_Value                          = $data[131];
			/* added */                                     
			$Manganese_Daily_Value_PPD                      = $data[132];
			$Chromium_Per_Serving                           = $data[133];
			$Chromium_Daily_Value                           = $data[134];
			/* added */                                     
			$Chromium_Daily_Value_PPD                       = $data[135];
			$Molybdenum_Per_Serving                         = $data[136];
			$Molybdenum_Daily_Value                         = $data[137];
			/* added */                                     
			$Molybdenum_Daily_Value_PPD                     = $data[138];
			$Chloride_Per_Serving                           = $data[139];
			$Chloride_Daily_Value                           = $data[140];
			/* added */                                      
			$Chloride_Daily_Value_PPD                       = $data[140];
			$Per_Serving_Amount_In_Grams                    = $data[142];
			$Per_Serving_Amount_In_Grams_PPD                = $data[143];

			

$cars = array
  (
  array("1",$Per_Serving_Energy_Kcal,'kcal', '', TRUE),
  array("1",$Per_Serving_Energy_PPD_Kcal,'kcal', NULL, FALSE), 
  

  array("2",$Fat_Per_Serving,'g', $Fat_Daily_Value, TRUE),
  array("2",NULL,NULL, $Fat_Daily_Value_PPD, FALSE), 
  
  array("3",$Saturated_Fat_Per_Serving,'g', NULL, TRUE),
  array("3",NULL,NULL, NULL, FALSE), 

  array("4",$Trans_Fat_Per_Serving,'g', NULL, TRUE),
  array("4",NULL,NULL, NULL, FALSE), 
  
  array("5",$Omega_6_Per_Serving,'g', NULL, TRUE),
  array("5",NULL,NULL,NULL, FALSE), 
  
  array("6",$Omega_3_Per_Serving,'g', NULL, TRUE),
  array("6",NULL,NULL, NULL, FALSE), 

  array("7",$Carbohydrates_Per_Serving,'g', $Carbohydrates_Daily_Value, TRUE),
  array("7",NULL,NULL, $Carbohydrates_Daily_Value_PPD, FALSE), 

  array("8",$Fibre_Per_Serving,'g', $Fibre_Daily_Value, TRUE),
  array("8",NULL,NULL, $Fibre_Daily_Value_PPD, FALSE),

  array("9",$Soluble_Fibre_Per_Serving,'g',NULL, TRUE),
  array("9",NULL,NULL, NULL, FALSE), 
  
  array("10",$Insoluble_Fibre_Per_Serving,'g', NULL, TRUE),
  array("10",NULL,NULL, NULL, FALSE), 

  array("11",$Sugar_Per_Serving,'g', $Sugar_Daily_Value, TRUE),
  array("11",NULL,NULL, $Sugar_Daily_Value_PPD, FALSE), 

  
  array("12",$Sugar_Alcohols_Per_Serving,'g', NULL, TRUE),
  array("12",NULL,NULL, NULL, FALSE), 
  
  array("13",$Starch_Per_Serving,'g', NULL, TRUE),
  array("13",NULL,NULL,NULL, FALSE), 
  
  array("14",$Protein_Per_Serving,'g',NULL, TRUE),
  array("14",NULL,NULL,NULL, FALSE), 

  array("15",$Cholesterol_Per_Serving,'g', $Cholesterol_Daily_Value, TRUE),
  array("15",NULL,NULL,NULL, FALSE), 

  array("16",$Sodium_Per_Serving,'g', $Sodium_Daily_Value, TRUE),
  array("16",NULL,NULL, $Sodium_Daily_Value_PPD, FALSE),
  
  array("17",$Potassium_Per_Serving,'mg', $Potassium_Daily_Value, TRUE),
  array("17",NULL,NULL, $Potassium_Daily_Value_PPD, FALSE), 
  
  array("18",$Calcium_Per_Serving,'mg', $Calcium_Daily_Value, TRUE),
  array("18",NULL,NULL, $Calcium_Daily_Value_PPD, FALSE), 

  array("19",$Iron_Per_Serving,'mg', $Iron_Daily_Value, TRUE),
  array("19",NULL,NULL, $Iron_Daily_Value_PPD, FALSE), 

  array("20",$VitaminA_Per_Serving,'um', $VitaminA_Daily_Value, TRUE),
  array("20",NULL,NULL, $VitaminA_Daily_Value_PPD, FALSE), 

  array("21",$VitaminC_Per_Serving,'mg', $VitaminC_Daily_Value, TRUE),
  array("21",NULL,NULL, $VitaminC_Daily_Value_PPD, FALSE),

  array("22",$VitaminD_Per_Serving,'um', $VitaminD_Daily_Value, TRUE),
  array("22",NULL,NULL, $VitaminD_Daily_Value_PPD, FALSE), 
  
  array("23",$VitaminE_Per_Serving,'mg', $VitaminE_Daily_Value, TRUE),
  array("23",NULL,NULL, $VitaminE_Daily_Value_PPD, FALSE), 
  
  array("24",$VitaminK_Per_Serving,'ug', $VitaminK_Daily_Value, TRUE),
  array("24",NULL,NULL, $VitaminK_Daily_Value_PPD, FALSE), 

  array("25",$Thiamine_Per_Serving,'mg', $Thiamine_Daily_Value, TRUE),
  
  array("25",NULL,NULL, $Thiamine_Daily_Value_PPD, FALSE), 

  array("26",$Riboflavin_Per_Serving,'mg', $Riboflavin_Daily_Value, TRUE),
  array("26",NULL,NULL, $Riboflavin_Daily_Value_PPD, FALSE),

  array("27",$Niacin_Per_Serving,'mg', $Niacin_Daily_Value_PPD, TRUE),
  array("27",NULL,NULL, $Niacin_Daily_Value_PPD, FALSE),
  
  array("28",$VitaminB6_Per_Serving,'mg', $VitaminB6_Daily_Value, TRUE),
  array("28",NULL,NULL, $VitaminB6_Daily_Value_PPD, FALSE), 

  array("29",$Folate_Per_Serving,'ug', $Folate_Daily_Value, TRUE),
  array("29",NULL,NULL,$Folate_Daily_Value_PPD, FALSE), 

  array("30",$VitaminB12_Per_Serving,'mg', $VitaminB12_Daily_Value, TRUE),
  array("30",NULL,NULL, $VitaminB12_Daily_Value_PPD, FALSE), 
  
  array("31",$Biotin_PerServing,'ug', $Biotin_Daily_Value, TRUE),
  array("31",NULL,NULL, $Biotin_Daily_Value_PPD, FALSE), 
  
  array("32",$Choline_Per_Serving,'mg', $Choline_Daily_Value, TRUE),
  array("32",NULL,NULL, $Choline_Daily_Value_PPD, FALSE), 

  array("33",$Pantothenate_Per_Serving,'mg', $Pantothenate_Daily_Value, TRUE),
  array("33",NULL,NULL, $Pantothenate_Daily_Value_PPD, FALSE), 

  array("34",$Phosphorus_Per_Serving,'mg', $Phosphorus_Daily_Value, TRUE),
  array("34",NULL,NULL, $Phosphorus_Daily_Value_PPD, FALSE),
  
  array("35",$Iodide_Per_Serving,'ug', $Iodide_Daily_Value, TRUE),
  array("35",NULL,NULL, $Iodide_Daily_Value_PPD, FALSE), 
  
  array("36",$Magnesium_Per_Serving,'mg', $Magnesium_Daily_Value, TRUE),
  array("36",NULL,NULL, $Magnesium_Daily_Value_PPD, FALSE), 
  
  array("37",$Zinc_Per_Serving,'mg',$Zinc_Daily_Value, TRUE),
  array("37",NULL,NULL, $Zinc_Daily_Value_PPD, FALSE), 

  array("38",$Selenium_Per_Serving,'ug', $Selenium_Daily_Value, TRUE),
  array("38",NULL,NULL, $Selenium_Daily_Value_PPD, FALSE), 

  array("39",$Copper_Per_Serving,'mg', $Copper_Daily_Value, TRUE),
  array("39",NULL,NULL, $Copper_Daily_Value_PPD, FALSE),


  array("40",$Manganese_Per_Serving,'mg', $Manganese_Daily_Value, TRUE),
  array("40",NULL,NULL, $Manganese_Daily_Value_PPD, FALSE), 
  
  array("41",$Chromium_Per_Serving,'ug', $Chromium_Daily_Value, TRUE),
  array("41",NULL,NULL, $Chromium_Daily_Value_PPD, FALSE), 
  
  array("42",$Molybdenum_Per_Serving,'ug', $Molybdenum_Daily_Value, TRUE),
  array("42",NULL,NULL, $Molybdenum_Daily_Value_PPD, FALSE), 

  array("43",$Chloride_Per_Serving,'mg', '$Chloride_Daily_Value', TRUE),
  array("43",NULL,NULL, $Chloride_Daily_Value_PPD, FALSE), 
 
  array("44",$Fat_PolyUnsaturated,'g', NULL, TRUE),
  array("44",NULL,NULL,NULL, FALSE),

  array("45",$Fat_Monounsaturated_Per_Serving,'g', NULL, TRUE),
  array("45",NULL,NULL,NULL, FALSE), 

  array("46",NULL,NULL, $Trans_And_Saturated_Fat_Daily_Vaue, TRUE),
  array("46",NULL,NULL, $Trans_And_Saturated_Fat_Daily_Vaue_PPD, FALSE), 
  
  array("47",$Per_Serving_Energy_Kj,'kJ', NULL, TRUE),
  array("47",$Per_Serving_Energy_PPD_Kj,'kJ', NULL, FALSE), 
  
  );			


			if ($Label_UPC === null or $Label_Description === null or $Brand === null or $Manufacturer === null or $Nielsen_Category === null or $Ingredients === null or $Nutrition_Fact_Table=== null or $Per_Serving_Amount=== null or $Per_Serving_UofM === null or $Per_Serving_Energy_Kcal === null or $Fat_Per_Serving === null or $Fat_Daily_Value=== null or $Carbohydrates_Per_Serving === null or $Carbohydrates_Daily_Value === null or $Fibre_Daily_Value_PPD === null or $Protein_Per_Serving === null)
			{

				++$skipped_count;
				if ($Label_Description === null) {
					$no_description = "Label without Description";
					$input1 = "Record : $Record, $no_description";
					$skipped_label->push($input1);
				} else {
					$inputx = "Record : $Record, $Label_Description";
					$skipped_label->push($inputx);
				}
			} else {
				/* We have all mandadory fields */
				/* Check to see if we already have that Label_UPC in the Label's table */
//Check for duplicates

							$query_duplicate =<<<EOQ
SELECT PackageID 
FROM Package
WHERE Label_UPC = ? AND Label_Description = ? AND Collection_Date = ?

EOQ;

				$stmt_duplicate = $conn->prepare($query_duplicate);
				$stmt_duplicate->bind_param("sss", $Label_UPC,$Label_Description, $Collection_Date);
				$stmt_duplicate->execute();
				$stmt_duplicate->store_result();
				if (($stmt_duplicate->num_rows) > 0 ){

					$input_dup = "Record : $Record, $Label_Description";
					$duplicate_label->push($input_dup);	
					++$duplicate_count;
						//duplicate_label
				}else{
						

				
//End of check







				$label_query =<<<EOQ
SELECT DISTINCT ProductIDP
  FROM Package
 WHERE Label_UPC = ?
EOQ;
				$stmt = $conn->prepare($label_query);
				$stmt->bind_param("s", $Label_UPC);
				$label_result = $stmt->execute();
								$stmt->store_result();
								
								
								if (($stmt->num_rows) < 1) {
					$sales_query =<<<EOQ
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;
					$stmt2 = $conn->prepare($sales_query);
					$stmt2->bind_param("s", $Neilsen_Item_Rank_UPC);
					$sales_result = $stmt2->execute();
					$stmt2->store_result();
								if (($stmt2->num_rows) < 1) {
						/* Create new Product and attach the label to it */
						if ($Product_Description == null) {
							$Product_Description = $Label_Description;
						}
						$params = array($Product_Description, $Brand, $Manufacturer);
						$query_product =<<<EOQ
INSERT INTO Product (Description, Brand, Manufacturer) VALUES (?, ?, ?)
EOQ;
						$stmt = $conn->prepare($query_product);
						$stmt->bind_param("sss", $params[0], $params[1], $params[2]);
						$stmt->execute();
						$id = mysqli_insert_id($conn);

						$params = array(
							$id,
							$Label_UPC,
							$Label_Description,
							$Per_Serving_Amount_PPD,
							$Per_Serving_Amount_PPD_UofM,
							$Per_Serving_Amount_In_Grams,
							$Per_Serving_Amount_In_Grams_PPD,
							$Package_Size_UofM,
							$Nielsen_Category,
							$Brand,
							$Manufacturer,
							$Country,
							$Package_Size,
							$Number_Of_Units,
							$Storage_Type,
							$Storage_Statement,
							$Collection_Date,
							$Health_Claim,
							$Nutrient_Claim,
							$Other_Package_Statement,
							$Suggested_Direction,
							$Ingredients,
							$Multipart,
							$Nutrition_Fact_Table,
							$Common_Household_Measure,
							$Per_Serving_Amount,
							$Per_Serving_UofM,
							$Source,
							$Comment,
							$Product_Description
						);

						$query_insert =<<<EOQ
INSERT Into Package(
       ProductIDP,
       Label_UPC,
       Label_Description,
       PPD_Per_Serving_Amount,
       PPD_Per_Serving_UofM,
       Per_Serving_Amount_In_Grams,
       Per_Serving_Amount_In_Grams_PPD,
       Package_Size_UofM,
       Nielsen_Category,
       Brand,
       Manufacturer,
       Country,
       Package_Size,
       Number_Of_Units,
       Storage_Type,
       Storage_Statement,
       Collection_Date,
       Health_Claim,
       Nutrition_Claim,
       Other_Package_Statement,
       Suggested_Direction,
       Ingredients,
       Multipart,
       Nutrition_Fact_Table,
       Common_Measure,
       Per_Serving_Amount,
       Per_Serving_Unit,
       Source,
       Comments,
       Product_Description
) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOQ;
						$stmt = $conn->prepare($query_insert);
						$stmt->bind_param("ssssssssssssssssssssssssssssss", $params[0], $params[1], $params[2], $params[3], $params[4], $params[5], $params[6], $params[7], $params[8], $params[9], $params[10], $params[11], $params[12], $params[13], $params[14], $params[15], $params[16], $params[17], $params[18], $params[19], $params[20], $params[21], $params[22], $params[23], $params[24], $params[25], $params[26], $params[27], $params[28], $params[29]);
						$result_insert = $stmt->execute();
						$id2 = mysqli_insert_id($conn);
						++$new_product_count;
	
$query_insert =<<<EOQ
INSERT INTO Product_Component(
			PackageID,
			ComponentID, 
			Amount, 
			Amount_Unit_Of_Measure,
			Daily_Value, 
			PPD
)
VALUES ( ?, ?, ?, ?, ?, ?)
EOQ;




for ($row1 = 0; $row1 < 94; $row1++) {

								$stmt = $conn->prepare($query_insert);
								
								$cars[$row1][1] =  (empty($cars[$row1][1]) && strlen($cars[$row1][1]) == 0 ?NULL :$cars[$row1][1]);
								$cars[$row1][3] =  (empty($cars[$row1][3]) && strlen($cars[$row1][3]) == 0 ?NULL :$cars[$row1][3]);
								$cars[$row1][2] =  (empty($cars[$row1][1]) && strlen($cars[$row1][1]) == 0 ?NULL :$cars[$row1][2]);

								$stmt->bind_param("iidsds",$id2, $cars[$row1][0],$cars[$row1][1],$cars[$row1][2],$cars[$row1][3],$cars[$row1][4]);
								$results = $stmt->execute();


}
						$input4= "Record : $Record, $Label_Description";
						$new_product->push($input4);

					} else {
						/* attach label to corresponding Product --Found in Sales Table*/
						$query1 =<<<EOQ
INSERT INTO Package(
       ProductIDP,
       Label_UPC,
       Label_Description,
       PPD_Per_Serving_Amount,
       PPD_Per_Serving_UofM,
       Per_Serving_Amount_In_Grams,
       Per_Serving_Amount_In_Grams_PPD,
       Package_Size_UofM,
       Nielsen_Category,
       Brand,
       Manufacturer,
       Country,
       Package_Size,
       Number_Of_Units,
       Storage_Type,
       Storage_Statement,
       Collection_Date,
       Health_Claim,
       Nutrition_Claim,
       Other_Package_Statement,
       Suggested_Direction,
       Ingredients,
       Multipart,
       Nutrition_Fact_Table,
       Common_Measure,
       Per_Serving_Amount,
       Per_Serving_Unit,
       Source,
       Comments,
       Product_Description
)
SELECT DISTINCT
       ProductIDS, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;

						$params = array($Label_UPC, $Label_Description, $Per_Serving_Amount_PPD, $Per_Serving_Amount_PPD_UofM, $Per_Serving_Amount_In_Grams, $Per_Serving_Amount_In_Grams_PPD, $Package_Size_UofM, $Nielsen_Category, $Brand, $Manufacturer, $Country, $Package_Size, $Number_Of_Units, $Storage_Type, $Storage_Statement, $Collection_Date, $Health_Claim, $Nutrient_Claim, $Other_Package_Statement, $Suggested_Direction, $Ingredients, $Multipart, $Nutrition_Fact_Table, $Common_Household_Measure, $Per_Serving_Amount, $Per_Serving_UofM, $Source, $Comment, $Product_Description);

						$stmt = $conn->prepare($query1);
						$stmt->bind_param("sssssssssssssssssssssssssssssi", $params[0], $params[1], $params[2], $params[3], $params[4], $params[5], $params[6], $params[7], $params[8], $params[9], $params[10], $params[11], $params[12], $params[13], $params[14], $params[15], $params[16], $params[17], $params[18], $params[19], $params[20], $params[21], $params[22], $params[23], $params[24], $params[25], $params[26], $params[27], $params[28], $Neilsen_Item_Rank_UPC);
						$stmt->execute();
						$nid = mysqli_insert_id($conn);
						++$linked_to_market_count;
						$params = array($Brand, $Manufacturer, $Neilsen_Item_Rank_UPC);



							//!empty($Product_Description) && strlen($Product_Description) != 0



						if (!empty($Product_Description) && strlen($Product_Description) != 0) {
							$params = array($Product_Description) + $params;
							$query_update =<<<EOQ
UPDATE Product
   SET Description = ?, Brand = ?, Manufacturer = ?
 WHERE ProductID = (
          SELECT DISTINCT ProductIDS
            FROM Sales
           WHERE Sales_UPC = ?
       )
EOQ;
							$stmt = $conn->prepare($query_update);
							$stmt->bind_param("sssi", $params[0], $params[1], $params[2], $params[3]);
						} else {
							$query_update =<<<EOQ
UPDATE Product
   SET Brand = ?, Manufacturer = ?
 WHERE ProductID = (
          SELECT DISTINCT ProductIDS
            FROM Sales
           WHERE Sales_UPC = ?
       )
EOQ;
							$stmt = $conn->prepare($query_update);
							$stmt->bind_param("ssi", $params[0], $params[1], $params[2]);
						
							$stmt->execute();
}


$query_insertx =<<<EOQ
INSERT INTO Product_Component(
			PackageID,
			ComponentID, 
			Amount, 
			Amount_Unit_Of_Measure,
			Daily_Value, 
			PPD
)
VALUES ( ?, ?, ?, ?, ?, ?)
EOQ;




for ($row2 = 0; $row2 < 94; $row2++) {

								$stmt = $conn->prepare($query_insertx);
								$cars[$row2][1] =  (empty($cars[$row2][1]) && strlen($cars[$row2][1]) == 0 ?NULL :$cars[$row2][1]);
								$cars[$row2][3] =  (empty($cars[$row2][3]) && strlen($cars[$row2][3]) == 0 ?NULL :$cars[$row2][3]);
								$cars[$row2][2] =  (empty($cars[$row2][1]) && strlen($cars[$row2][1]) == 0 ?NULL :$cars[$row2][2]);

							
								$stmt->bind_param("iidsds",$nid, $cars[$row2][0],$cars[$row2][1],$cars[$row2][2],$cars[$row2][3],$cars[$row2][4]);
								$results = $stmt->execute();
}




						$input3= "Record : $Record, $Label_Description";
						$linked_sales->push($input3);

					}				
					
				} else {
					$query2 =<<<EOQ
INSERT Into Package(
       ProductIDP,
       Label_UPC,
       Label_Description,
       PPD_Per_Serving_Amount,
       PPD_Per_Serving_UofM,
       Per_Serving_Amount_In_Grams,
       Per_Serving_Amount_In_Grams_PPD,
       Package_Size_UofM,
       Nielsen_Category,
       Brand,
       Manufacturer,
       Country,
       Package_Size,
       Number_Of_Units,
       Storage_Type,
       Storage_Statement,
       Collection_Date,
       Health_Claim,
       Nutrition_Claim,
       Other_Package_Statement,
       Suggested_Direction,
       Ingredients,
       Multipart,
       Nutrition_Fact_Table,
       Common_Measure,
       Per_Serving_Amount,
       Per_Serving_Unit,
       Source,
       Comments,
       Product_Description
)
SELECT DISTINCT
       ProductIDP, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Package
 WHERE Label_UPC = ?
EOQ;

					$params = array($Label_UPC, $Label_Description, $Per_Serving_Amount_PPD, $Per_Serving_Amount_PPD_UofM, $Per_Serving_Amount_In_Grams, $Per_Serving_Amount_In_Grams_PPD, $Package_Size_UofM, $Nielsen_Category, $Brand, $Manufacturer, $Country, $Package_Size, $Number_Of_Units, $Storage_Type, $Storage_Statement, $Collection_Date, $Health_Claim, $Nutrient_Claim, $Other_Package_Statement, $Suggested_Direction, $Ingredients, $Multipart, $Nutrition_Fact_Table, $Common_Household_Measure, $Per_Serving_Amount, $Per_Serving_UofM, $Source, $Comment, $Product_Description);
					$stmt = $conn->prepare($query2);
					$stmt->bind_param("sssssssssssssssssssssssssssssi", $params[0], $params[1], $params[2], $params[3], $params[4], $params[5], $params[6], $params[7], $params[8], $params[9], $params[10], $params[11], $params[12], $params[13], $params[14], $params[15], $params[16], $params[17], $params[18], $params[19], $params[20], $params[21], $params[22], $params[23], $params[24], $params[25], $params[26], $params[27], $params[28], $Label_UPC);
					$stmt->execute();
					$xid = mysqli_insert_id($conn);
					++$linked_to_label_count;
					$params = array($Brand, $Manufacturer, $Label_UPC);

				if(!empty($Product_Description) && strlen($Product_Description) != 0){
					
					$query_update="UPDATE  $dbname.Product SET Description='$Product_Description', Brand='$Brand', Manufacturer='$Manufacturer' WHERE ProductID=(Select Distinct ProductIDP from $dbname.Package Where Label_UPC = '$Label_UPC')";
					$result_update = mysqli_query($conn,$query_update);
					
				}else{
					$query_update="UPDATE  $dbname.Product SET Brand='$Brand',Manufacturer='$Manufacturer' WHERE ProductID=(Select Distinct ProductIDP from $dbname.Package Where Label_UPC = '$Label_UPC')";
					$result_update = mysqli_query($conn,$query_update);
					
				}
				
$query_insert1 =<<<EOQ
INSERT INTO Product_Component(
			PackageID,
			ComponentID, 
			Amount, 
			Amount_Unit_Of_Measure,
			Daily_Value, 
			PPD
)
VALUES ( ?, ?, ?, ?, ?, ?)
EOQ;




for ($row3 = 0; $row3 < 94; $row3++) {

								$stmt = $conn->prepare($query_insert1);
								
								$cars[$row3][1] =  (empty($cars[$row3][1]) && strlen($cars[$row3][1]) == 0 ?NULL :$cars[$row3][1]);
								$cars[$row3][3] =  (empty($cars[$row3][3]) && strlen($cars[$row3][3]) == 0 ?NULL :$cars[$row3][3]);
								$cars[$row3][2] =  (empty($cars[$row3][1]) && strlen($cars[$row3][1]) == 0 ?NULL :$cars[$row3][2]);

								
								$stmt->bind_param("iidsds",$xid, $cars[$row3][0],$cars[$row3][1],$cars[$row3][2],$cars[$row3][3],$cars[$row3][4]);
								$results = $stmt->execute();




}
					$input2= "Record : $Record, $Label_Description";
					$linked_label->push($input2);
				}
	} }
	

    }
	
} 

 fclose($handle); 

 	echo "<h3>$linked_to_market_count Label(s) Linked to existing Products via Market Share UPCs Codes</h3>";
	echo "<h3> $linked_to_label_count Label(s) Linked to existing Products via other Labels UPCs Codes</h3>";
	echo "<h3>$skipped_count Record(s) skipped</h3>";
	echo "<h3>$new_product_count Label(s) linked to new products</h3>";
	echo "<h3>$duplicate_count duplicate(s) </h3><br>";
	echo "<hr style=\" border-top: 1px solid red;\">";

    $tosend = " ";
 	echo "<h2> Labels Linked to existing Products via Market Share UPCs Codes</h2>";
		while (!$linked_sales->isEmpty()) {
			$senditem = $linked_sales->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}

		echo "<h2> Labels Linked to existing Products via other Labels UPCs Codes</h2>";
		while (!$linked_label->isEmpty()) {
			$senditem = $linked_label->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}
		echo "<h2> Records skipped</h2>";
		while (!$skipped_label->isEmpty()) {
			$senditem = $skipped_label->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}

				echo "<h2>Labels linked to new products</h2>";
		while (!$new_product->isEmpty()) {
			$senditem = $new_product->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
			$tosend =$tosend . ' ' . $senditem;
		}
				echo "<h2>duplicates </h2>";
		while (!$duplicate_label->isEmpty()) {
			$senditem = $duplicate_label->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}


		print "Import done";
}


?>
