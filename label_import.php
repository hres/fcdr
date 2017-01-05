<?php include 'connection.php';?>

<?php
	
	error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "Classes/PHPExcel.php";

if (isset($_POST['search'])) {


	if (is_uploaded_file($_FILES['file_save']['tmp_name'])) {
		//echo "<h1>" . "File ". $_FILES['file_save']['name'] ." uploaded successfully." . "</h1>";

	//	readfile($_FILES['file_save']['tmp_name']);

		//echo "1";
		$tmpfname = $_FILES['file_save']['tmp_name'];
		//echo "2";
		$cacheMethod = PHPExcel_CachedObjectStorageFactory:: cache_to_phpTemp;
		$cacheSettings = array( ' memoryCacheSize ' => '8MB');
		PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
		//echo "****";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);

		//echo "3";
		$excelObj = $excelReader->load($tmpfname);
		$excelReader->setReadDataOnly(true);
		//echo "4";
		$worksheet = $excelObj->getSheet(0);
		//echo "5";
		$lastRow = $worksheet->getHighestRow();

		//echo "6";

		$count = 0;
		$skipped_label = new SplQueue();
		$new_product   = new SplQueue();
		$linked_sales  = new SplQueue();
		$linked_label  = new SplQueue();




 // create new directory with 744 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
		


		for ($row = 2; $row <= $lastRow; $row++) {
		
			$Record                                         = mysqli_real_escape_string($conn,$worksheet->getCell('A'.$row)->getValue());

			$Label_UPC                                      = mysqli_real_escape_string($conn,$worksheet->getCell('B'.$row)->getValue());

			$Neilsen_Item_Rank_UPC                          = mysqli_real_escape_string($conn,$worksheet->getCell('C'.$row)->getValue());

			$Nielsen_Category                               = mysqli_real_escape_string($conn,$worksheet->getCell('D'.$row)->getValue());
			$Label_Description                              = mysqli_real_escape_string($conn,$worksheet->getCell('E'.$row)->getValue());
			$Brand                                          = mysqli_real_escape_string($conn,$worksheet->getCell('F'.$row)->getValue());
			$Manufacturer                                   = mysqli_real_escape_string($conn,$worksheet->getCell('G'.$row)->getValue());
			$Country                                        = mysqli_real_escape_string($conn,$worksheet->getCell('H'.$row)->getValue());
			$Package_Size                                   = mysqli_real_escape_string($conn,$worksheet->getCell('I'.$row)->getValue());

			$Package_Size_UofM                              = $worksheet->getCell('J'.$row)->getValue();
			$Number_Of_Units                                = $worksheet->getCell('K'.$row)->getValue();
			$Storage_Type                                   = $worksheet->getCell('L'.$row)->getValue();
			$Storage_Statement                              = mysqli_real_escape_string($conn,$worksheet->getCell('M'.$row)->getValue());
			$Collection_Date                                = $worksheet->getCell('N'.$row)->getValue();
			$Health_Claim                                   = mysqli_real_escape_string($conn,$worksheet->getCell('O'.$row)->getValue());
			$Nutrient_Claim                                 = mysqli_real_escape_string($conn,$worksheet->getCell('P'.$row)->getValue());
			$Other_Package_Statement                        = mysqli_real_escape_string($conn,$worksheet->getCell('Q'.$row)->getValue());
			$Suggested_Direction                            = mysqli_real_escape_string($conn,$worksheet->getCell('R'.$row)->getValue());
			$Ingredients                                    = mysqli_real_escape_string($conn,$worksheet->getCell('S'.$row)->getValue());
			$Multipart                                      = mysqli_real_escape_string($conn,$worksheet->getCell('T'.$row)->getValue());
			$Nutrition_Fact_Table                           = mysqli_real_escape_string($conn,$worksheet->getCell('U'.$row)->getValue());
			$Common_Household_Measure                       = mysqli_real_escape_string($conn,$worksheet->getCell('V'.$row)->getValue());
			$Per_Serving_Amount                             = $worksheet->getCell('W'.$row)->getValue();
			$Per_Serving_UofM                               = $worksheet->getCell('X'.$row)->getValue();
			$Per_Serving_Amount_PPD                         = $worksheet->getCell('Y'.$row)->getValue();
			$Per_Serving_Amount_PPD_UofM                    = $worksheet->getCell('Z'.$row)->getValue();
			$Comment                                        = mysqli_real_escape_string($conn,$worksheet->getCell('EO'.$row)->getValue());
			$Source                                         = mysqli_real_escape_string($conn,$worksheet->getCell('EP'.$row)->getValue());
			$Product_Description                            = mysqli_real_escape_string($conn,$worksheet->getCell('EQ'.$row)->getValue());

			
			
			
			$Per_Serving_Energy_Kcal                        = $worksheet->getCell('AA'.$row)->getValue();
			$Per_Serving_Energy_PPD_Kcal                    = $worksheet->getCell('AB'.$row)->getValue();
			$Per_Serving_Energy_Kj                          = $worksheet->getCell('AC'.$row)->getValue();
			$Per_Serving_Energy_PPD_Kj                      = $worksheet->getCell('AD'.$row)->getValue();
			$Fat_Per_Serving                                = $worksheet->getCell('AE'.$row)->getValue();
			$Fat_Daily_Value                                = $worksheet->getCell('AF'.$row)->getValue();
			/* added */
			$Fat_Daily_Value_PPD                            = $worksheet->getCell('AG'.$row)->getValue();
			$Saturated_Fat_Per_Serving                      = $worksheet->getCell('AH'.$row)->getValue();
			$Trans_Fat_Per_Serving                          = $worksheet->getCell('AI'.$row)->getValue();
			$Trans_And_Saturated_Fat_Daily_Vaue             = $worksheet->getCell('AJ'.$row)->getValue();
			/* added */
			$Trans_And_Saturated_Fat_Daily_Vaue_PPD         = $worksheet->getCell('AK'.$row)->getValue();
			$Fat_PolyUnsaturated                            = $worksheet->getCell('AL'.$row)->getValue();
			$Omega_6_Per_Serving                            = $worksheet->getCell('AM'.$row)->getValue();
			$Omega_3_Per_Serving                            = $worksheet->getCell('AN'.$row)->getValue();
			$Fat_Monounsaturated_Per_Serving                = $worksheet->getCell('AO'.$row)->getValue();
			$Carbohydrates_Per_Serving                      = $worksheet->getCell('AP'.$row)->getValue();
			$Carbohydrates_Daily_Value                      = $worksheet->getCell('AQ'.$row)->getValue();
			/* added */
			$Carbohydrates_Daily_Value_PPD                  = $worksheet->getCell('AR'.$row)->getValue();
			$Fibre_Per_Serving                              = $worksheet->getCell('AS'.$row)->getValue();
			$Fibre_Daily_Value                              = $worksheet->getCell('AT'.$row)->getValue();
			/* added */
			$Fibre_Daily_Value_PPD                          = $worksheet->getCell('AU'.$row)->getValue();
			$Soluble_Fibre_Per_Serving                      = $worksheet->getCell('AV'.$row)->getValue();
			$Insoluble_Fibre_Per_Serving                    = $worksheet->getCell('AW'.$row)->getValue();
			$Sugar_Per_Serving                              = $worksheet->getCell('AX'.$row)->getValue();
			$Sugar_Daily_Value                              = $worksheet->getCell('AY'.$row)->getValue();
			/* added */
			$Sugar_Daily_Value_PPD                          = $worksheet->getCell('AZ'.$row)->getValue();
			$Sugar_Alcohols_Per_Serving                     = $worksheet->getCell('BA'.$row)->getValue();
			$Starch_Per_Serving                             = $worksheet->getCell('BB'.$row)->getValue();
			$Protein_Per_Serving                            = $worksheet->getCell('BC'.$row)->getValue();
			$Cholesterol_Per_Serving                        = $worksheet->getCell('BD'.$row)->getValue();
			$Cholesterol_Daily_Value                        = $worksheet->getCell('BE'.$row)->getValue();
			/* added */
			$Cholesterol_Daily_Value_PPD                    = $worksheet->getCell('BF'.$row)->getValue();
			$Sodium_Per_Serving                             = $worksheet->getCell('BG'.$row)->getValue();
			$Sodium_Daily_Value                             = $worksheet->getCell('BH'.$row)->getValue();
			/* added */
			$Sodium_Daily_Value_PPD                         = $worksheet->getCell('BI'.$row)->getValue();
			$Potassium_Per_Serving                          = $worksheet->getCell('BJ'.$row)->getValue();
			$Potassium_Daily_Value                          = $worksheet->getCell('BK'.$row)->getValue();
			/* added */
			$Potassium_Daily_Value_PPD                      = $worksheet->getCell('BL'.$row)->getValue();
			$Calcium_Per_Serving                            = $worksheet->getCell('BM'.$row)->getValue();
			$Calcium_Daily_Value                            = $worksheet->getCell('BN'.$row)->getValue();
			/* added */
			$Calcium_Daily_Value_PPD                        = $worksheet->getCell('BO'.$row)->getValue();
			$Iron_Per_Serving                               = $worksheet->getCell('BP'.$row)->getValue();
			$Iron_Daily_Value                               = $worksheet->getCell('BQ'.$row)->getValue();
			/* added */
			$Iron_Daily_Value_PPD                           = $worksheet->getCell('BR'.$row)->getValue();
			$VitaminA_Per_Serving                           = $worksheet->getCell('BS'.$row)->getValue();
			$VitaminA_Daily_Value                           = $worksheet->getCell('BT'.$row)->getValue();
			/* added */
			$VitaminA_Daily_Value_PPD                       = $worksheet->getCell('BU'.$row)->getValue();
			$VitaminC_Per_Serving                           = $worksheet->getCell('BV'.$row)->getValue();
			$VitaminC_Daily_Value                           = $worksheet->getCell('BW'.$row)->getValue();
			/* added */
			$VitaminC_Daily_Value_PPD                       = $worksheet->getCell('BX'.$row)->getValue();
			$VitaminD_Per_Serving                           = $worksheet->getCell('BY'.$row)->getValue();
			$VitaminD_Daily_Value                           = $worksheet->getCell('BZ'.$row)->getValue();
			/* added */
			$VitaminD_Daily_Value_PPD                       = $worksheet->getCell('CA'.$row)->getValue();
			$VitaminE_Per_Serving                           = $worksheet->getCell('CB'.$row)->getValue();
			$VitaminE_Daily_Value                           = $worksheet->getCell('CC'.$row)->getValue();
			/* added */
			$VitaminE_Daily_Value_PPD                       = $worksheet->getCell('CD'.$row)->getValue();
			$VitaminK_Per_Serving                           = $worksheet->getCell('CE'.$row)->getValue();
			$VitaminK_Daily_Value                           = $worksheet->getCell('CF'.$row)->getValue();
			/* added */
			$VitaminK_Daily_Value_PPD                       = $worksheet->getCell('CG'.$row)->getValue();
			$Thiamine_Per_Serving                           = $worksheet->getCell('CH'.$row)->getValue();
			$Thiamine_Daily_Value                           = $worksheet->getCell('CI'.$row)->getValue();
			/* added */
			$Thiamine_Daily_Value_PPD                       = $worksheet->getCell('CJ'.$row)->getValue();
			$Riboflavin_Per_Serving                         = $worksheet->getCell('CK'.$row)->getValue();
			$Riboflavin_Daily_Value                         = $worksheet->getCell('CL'.$row)->getValue();
			/* added */
			$Riboflavin_Daily_Value_PPD                     = $worksheet->getCell('CM'.$row)->getValue();
			$Niacin_Per_Serving                             = $worksheet->getCell('CN'.$row)->getValue();
			$Niacin_Daily_Value                             = $worksheet->getCell('CO'.$row)->getValue();
			/* added */
			$Niacin_Daily_Value_PPD                         = $worksheet->getCell('CP'.$row)->getValue();
			$VitaminB6_Per_Serving                          = $worksheet->getCell('CQ'.$row)->getValue();
			$VitaminB6_Daily_Value                          = $worksheet->getCell('CR'.$row)->getValue();
			/* added */
			$VitaminB6_Daily_Value_PPD                      = $worksheet->getCell('CS'.$row)->getValue();
			$Folate_Per_Serving                             = $worksheet->getCell('CT'.$row)->getValue();
			$Folate_Daily_Value                             = $worksheet->getCell('CU'.$row)->getValue();
			/* added */
			$Folate_Daily_Value_PPD                         = $worksheet->getCell('CV'.$row)->getValue();
			$VitaminB12_Per_Serving                         = $worksheet->getCell('CW'.$row)->getValue();
			$VitaminB12_Daily_Value                         = $worksheet->getCell('CX'.$row)->getValue();
			/* added */
			$VitaminB12_Daily_Value_PPD                     = $worksheet->getCell('CY'.$row)->getValue();
			$Biotin_PerServing                              = $worksheet->getCell('CZ'.$row)->getValue();
			$Biotin_Daily_Value                             = $worksheet->getCell('DA'.$row)->getValue();
			/* added */
			$Biotin_Daily_Value_PPD                         = $worksheet->getCell('DB'.$row)->getValue();
			$Choline_Per_Serving                            = $worksheet->getCell('DC'.$row)->getValue();
			$Choline_Daily_Value                            = $worksheet->getCell('DD'.$row)->getValue();
			/* added */
			$Choline_Daily_Value_PPD                        = $worksheet->getCell('DE'.$row)->getValue();
			$Pantothenate_Per_Serving                       = $worksheet->getCell('DF'.$row)->getValue();
			$Pantothenate_Daily_Value                       = $worksheet->getCell('DG'.$row)->getValue();
			/* added */
			$Pantothenate_Daily_Value_PPD                   = $worksheet->getCell('DH'.$row)->getValue();
			$Phosphorus_Per_Serving                         = $worksheet->getCell('DI'.$row)->getValue();
			$Phosphorus_Daily_Value                         = $worksheet->getCell('DJ'.$row)->getValue();
			/* added */
			$Phosphorus_Daily_Value_PPD                     = $worksheet->getCell('DK'.$row)->getValue();
			$Iodide_Per_Serving                             = $worksheet->getCell('DL'.$row)->getValue();
			$Iodide_Daily_Value                             = $worksheet->getCell('DM'.$row)->getValue();
			/* added */
			$Iodide_Daily_Value_PPD                         = $worksheet->getCell('DN'.$row)->getValue();
			$Magnesium_Per_Serving                          = $worksheet->getCell('DO'.$row)->getValue();
			$Magnesium_Daily_Value                          = $worksheet->getCell('DP'.$row)->getValue();
			/* added */
			$Magnesium_Daily_Value_PPD                      = $worksheet->getCell('DQ'.$row)->getValue();
			$Zinc_Per_Serving                               = $worksheet->getCell('DR'.$row)->getValue();
			$Zinc_Daily_Value                               = $worksheet->getCell('DS'.$row)->getValue();
			/* added */
			$Zinc_Daily_Value_PPD                           = $worksheet->getCell('DT'.$row)->getValue();
			$Selenium_Per_Serving                           = $worksheet->getCell('DU'.$row)->getValue();
			$Selenium_Daily_Value                           = $worksheet->getCell('DV'.$row)->getValue();
			/* added */
			$Selenium_Daily_Value_PPD                       = $worksheet->getCell('DW'.$row)->getValue();
			$Copper_Per_Serving                             = $worksheet->getCell('DX'.$row)->getValue();
			$Copper_Daily_Value                             = $worksheet->getCell('DY'.$row)->getValue();
			/* added */
			$Copper_Daily_Value_PPD                         = $worksheet->getCell('DZ'.$row)->getValue();
			$Manganese_Per_Serving                          = $worksheet->getCell('EA'.$row)->getValue();
			$Manganese_Daily_Value                          = $worksheet->getCell('EB'.$row)->getValue();
			/* added */
			$Manganese_Daily_Value_PPD                      = $worksheet->getCell('EC'.$row)->getValue();
			$Chromium_Per_Serving                           = $worksheet->getCell('ED'.$row)->getValue();
			$Chromium_Daily_Value                           = $worksheet->getCell('EE'.$row)->getValue();
			/* added */
			$Chromium_Daily_Value_PPD                       = $worksheet->getCell('EF'.$row)->getValue();
			$Molybdenum_Per_Serving                         = $worksheet->getCell('EG'.$row)->getValue();
			$Molybdenum_Daily_Value                         = $worksheet->getCell('EH'.$row)->getValue();
			/* added */
			$Molybdenum_Daily_Value_PPD                     = $worksheet->getCell('EI'.$row)->getValue();
			$Chloride_Per_Serving                           = $worksheet->getCell('EJ'.$row)->getValue();
			$Chloride_Daily_Value                           = $worksheet->getCell('EK'.$row)->getValue();
			/* added */
			$Chloride_Daily_Value_PPD                       = $worksheet->getCell('EL'.$row)->getValue();
			$Per_Serving_Amount_In_Grams                    = $worksheet->getCell('EM'.$row)->getValue();
			$Per_Serving_Amount_In_Grams_PPD                = $worksheet->getCell('EN'.$row)->getValue();

			

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
  
  array("47",$Per_Serving_Energy_Kj,'kj', NULL, TRUE),
  array("47",$Per_Serving_Energy_PPD_Kj,'kj', NULL, FALSE), 
  
  );			


			if ($Label_UPC === null or $Label_Description === null or $Brand === null or $Manufacturer === null or $Nielsen_Category === null or $Ingredients === null or $Nutrition_Fact_Table=== null or $Per_Serving_Amount=== null or $Per_Serving_UofM === null or $Per_Serving_Energy_Kcal === null or $Fat_Per_Serving === null or $Fat_Daily_Value=== null or $Carbohydrates_Per_Serving === null or $Carbohydrates_Daily_Value === null or $Fibre_Daily_Value_PPD === null or $Protein_Per_Serving === null)
			{
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




for ($row1 = 0; $row1 < 92; $row1++) {

								$stmt = $conn->prepare($query_insert);
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
						$nid = mysqli_insert_id($conn);
						$stmt->execute();

						$params = array($Brand, $Manufacturer, $Neilsen_Item_Rank_UPC);
						if ($Product_Description != null) {
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




for ($row2 = 0; $row2 < 92; $row2++) {

								$stmt = $conn->prepare($query_insertx);
								$stmt->bind_param("iidsds",$nid, $cars[$row2][0],$cars[$row2][1],$cars[$row2][2],$cars[$row][3],$cars[$row2][4]);
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
					$params = array($Brand, $Manufacturer, $Label_UPC);

				if($Product_Description != null){
					
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




for ($row3 = 0; $row3 < 92; $row3++) {

								$stmt = $conn->prepare($query_insert1);
								$stmt->bind_param("iidsds",$xid, $cars[$row3][0],$cars[$row3][1],$cars[$row3][2],$cars[$row3][3],$cars[$row3][4]);
								$results = $stmt->execute();




}
					$input2= "Record : $Record, $Label_Description";
					$linked_label->push($input2);
				}
			}
		}
		echo "<h2>Labels Linked to existing Products via Market Share UPCs Codes</h2>";
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
			echo "$senditem";
		}

	} else {
		echo "Unable to read the file";
	}

	fclose($handle);

	print "Import done";

	//view upload form
} else {
	//print "Upload new csv by browsing to file and clicking on Upload<br/>\n";
}

?>
