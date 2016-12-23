
<?php include 'connection.php';?>

<?php		 
require_once "Classes/PHPExcel.php";


if (isset($_POST['search'])) {
/* 	error_reporting(E_ALL);
ini_set('display_errors', 1); */

	
	if (is_uploaded_file($_FILES['file_save']['tmp_name'])) {
		echo "<h1>" . "File ". $_FILES['file_save']['name'] ." uploaded successfully." . "</h1>";
		
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
		$new_product = new SplQueue();
		$linked_sales = new SplQueue();
		$linked_label = new SplQueue();	
		
		
	

 // create new directory with 744 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
	
		

		for ($row = 2; $row <= $lastRow; $row++) {

		
	
	
		$Record = mysqli_real_escape_string($conn,$worksheet->getCell('A'.$row)->getValue());
		
		$Label_UPC = mysqli_real_escape_string($conn,$worksheet->getCell('B'.$row)->getValue());
		
		$Neilsen_Item_Rank_UPC = mysqli_real_escape_string($conn,$worksheet->getCell('C'.$row)->getValue());
		
		$Nielsen_Category = mysqli_real_escape_string($conn,$worksheet->getCell('D'.$row)->getValue());
		$Label_Description = mysqli_real_escape_string($conn,$worksheet->getCell('E'.$row)->getValue());
		$Brand = mysqli_real_escape_string($conn,$worksheet->getCell('F'.$row)->getValue());
		$Manufacturer = mysqli_real_escape_string($conn,$worksheet->getCell('G'.$row)->getValue());
		$Country = mysqli_real_escape_string($conn,$worksheet->getCell('H'.$row)->getValue());
		$Package_Size = mysqli_real_escape_string($conn,$worksheet->getCell('I'.$row)->getValue());
		
		$Package_Size_UofM = $worksheet->getCell('J'.$row)->getValue();
		
		$Number_Of_Units = $worksheet->getCell('K'.$row)->getValue();

		$Storage_Type = $worksheet->getCell('L'.$row)->getValue();
		$Storage_Statement = mysqli_real_escape_string($conn,$worksheet->getCell('M'.$row)->getValue());
		$Collection_Date = mysqli_real_escape_string($conn,$worksheet->getCell('N'.$row)->getValue());
		$Health_Claim = mysqli_real_escape_string($conn,$worksheet->getCell('O'.$row)->getValue());
		$Nutrient_Claim = mysqli_real_escape_string($conn,$worksheet->getCell('P'.$row)->getValue());
		
		$Other_Package_Statement = mysqli_real_escape_string($conn,$worksheet->getCell('Q'.$row)->getValue());
		$Suggested_Direction = mysqli_real_escape_string($conn,$worksheet->getCell('R'.$row)->getValue());
		$Ingredients = mysqli_real_escape_string($conn,$worksheet->getCell('S'.$row)->getValue());
		$Multipart = mysqli_real_escape_string($conn,$worksheet->getCell('T'.$row)->getValue());
		$Nutrition_Fact_Table = mysqli_real_escape_string($conn,$worksheet->getCell('U'.$row)->getValue());
		$Common_Household_Measure = mysqli_real_escape_string($conn,$worksheet->getCell('V'.$row)->getValue());
		$Per_Serving_Amount = $worksheet->getCell('W'.$row)->getValue();
		$Per_Serving_UofM = $worksheet->getCell('X'.$row)->getValue();
		
		$Per_Serving_Amount_PPD = $worksheet->getCell('Y'.$row)->getValue();
		$Per_Serving_Amount_PPD_UofM = $worksheet->getCell('Z'.$row)->getValue();

		
		$Per_Serving_Energy_Kcal = $worksheet->getCell('AA'.$row)->getValue();
		$Per_Serving_Energy_PPD_Kcal = $worksheet->getCell('AB'.$row)->getValue();
		$Per_Serving_Energy_Kj = $worksheet->getCell('AC'.$row)->getValue();
		$Per_Serving_Energy_PPD_Kj = $worksheet->getCell('AD'.$row)->getValue();
		$Fat_Per_Serving = $worksheet->getCell('AE'.$row)->getValue();
		$Fat_Daily_Value = $worksheet->getCell('AF'.$row)->getValue();
		/* added */
		$Fat_Daily_Value_PPD = $worksheet->getCell('AG'.$row)->getValue();
		
		$Saturated_Fat_Per_Serving = $worksheet->getCell('AH'.$row)->getValue();
		$Trans_Fat_Per_Serving = $worksheet->getCell('AI'.$row)->getValue();
		$Trans_And_Saturated_Fat_Daily_Value = $worksheet->getCell('AJ'.$row)->getValue();
		
		/* added */
		$Trans_And_Saturated_Fat_Daily_Value_PPD = $worksheet->getCell('AK'.$row)->getValue();
		
		$Fat_PolyUnsaturated = $worksheet->getCell('AL'.$row)->getValue();
		$Omega_6_Per_Serving = $worksheet->getCell('AM'.$row)->getValue();
		$Omega_3_Per_Serving = $worksheet->getCell('AN'.$row)->getValue();
		$Fat_Monounsaturated_Per_Serving = $worksheet->getCell('AO'.$row)->getValue();
		$Carbohydrates_Per_Serving = $worksheet->getCell('AP'.$row)->getValue();
		$Carbohydrates_Daily_Value = $worksheet->getCell('AQ'.$row)->getValue();
		/* added */
		$Carbohydrates_Daily_Value_PPD = $worksheet->getCell('AR'.$row)->getValue();
		
		$Fibre_Per_Serving = $worksheet->getCell('AS'.$row)->getValue();
		$Fibre_Daily_Value = $worksheet->getCell('AT'.$row)->getValue();
		/* added */
		$Fibre_Daily_Value_PPD = $worksheet->getCell('AU'.$row)->getValue();
		
		$Soluble_Fibre_Per_Serving = $worksheet->getCell('AV'.$row)->getValue();
		$Insoluble_Fibre_Per_Serving = $worksheet->getCell('AW'.$row)->getValue();
		$Sugar_Per_Serving = $worksheet->getCell('AX'.$row)->getValue();
		$Sugar_Daily_Value = $worksheet->getCell('AY'.$row)->getValue();
		/* added */
		$Sugar_Daily_Value_PPD = $worksheet->getCell('AZ'.$row)->getValue();
		
		$Sugar_Alcohols_Per_Serving = $worksheet->getCell('BA'.$row)->getValue();
		$Starch_Per_Serving = $worksheet->getCell('BB'.$row)->getValue();
		$Protein_Per_Serving = $worksheet->getCell('BC'.$row)->getValue();
		$Cholesterol_Per_Serving = $worksheet->getCell('BD'.$row)->getValue();
		$Cholesterol_Daily_Value = $worksheet->getCell('BE'.$row)->getValue();
		
		/* added */
		$Cholesterol_Daily_Value_PPD = $worksheet->getCell('BF'.$row)->getValue();
		
		$Sodium_Per_Serving = $worksheet->getCell('BG'.$row)->getValue();
		$Sodium_Daily_Value = $worksheet->getCell('BH'.$row)->getValue();
			/* added */
		$Sodium_Daily_Value_PPD = $worksheet->getCell('BI'.$row)->getValue();
		
		$Potassium_Per_Serving = $worksheet->getCell('BJ'.$row)->getValue();
		$Potassium_Daily_Value = $worksheet->getCell('BK'.$row)->getValue();
		/* added */
		$Potassium_Daily_Value_PPD = $worksheet->getCell('BL'.$row)->getValue();
		
		$Calcium_Per_Serving = $worksheet->getCell('BM'.$row)->getValue();
		$Calcium_Daily_Value = $worksheet->getCell('BN'.$row)->getValue();
		/* added */
		$Calcium_Daily_Value_PPD = $worksheet->getCell('BO'.$row)->getValue();
		
		$Iron_Per_Serving = $worksheet->getCell('BP'.$row)->getValue();
		$Iron_Daily_Value = $worksheet->getCell('BQ'.$row)->getValue();
		
		/* added */
		$Iron_Daily_Value_PPD = $worksheet->getCell('BR'.$row)->getValue();
		
		$VitaminA_Per_Serving = $worksheet->getCell('BS'.$row)->getValue();
		$VitaminA_Daily_Value = $worksheet->getCell('BT'.$row)->getValue();
		/* added */
		$VitaminA_Daily_Value_PPD = $worksheet->getCell('BU'.$row)->getValue();
		
		$VitaminC_Per_Serving = $worksheet->getCell('BV'.$row)->getValue();
		$VitaminC_Daily_Value = $worksheet->getCell('BW'.$row)->getValue();
		/* added */
		$VitaminC_Daily_Value_PPD = $worksheet->getCell('BX'.$row)->getValue();
		
		$VitaminD_Per_Serving = $worksheet->getCell('BY'.$row)->getValue();
		$VitaminD_Daily_Value = $worksheet->getCell('BZ'.$row)->getValue();
		/* added */
		$VitaminD_Daily_Value_PPD = $worksheet->getCell('CA'.$row)->getValue();
		
		$VitaminE_Per_Serving = $worksheet->getCell('CB'.$row)->getValue();
		$VitaminE_Daily_Value = $worksheet->getCell('CC'.$row)->getValue();
		/* added */
		$VitaminE_Daily_Value_PPD = $worksheet->getCell('CD'.$row)->getValue();
		
		$VitaminK_Per_Serving = $worksheet->getCell('CE'.$row)->getValue();
		$VitaminK_Daily_Value = $worksheet->getCell('CF'.$row)->getValue();
		/* added */
		$VitaminK_Daily_Value_PPD = $worksheet->getCell('CG'.$row)->getValue();
		
		$Thiamine_Per_Serving = $worksheet->getCell('CH'.$row)->getValue();
		$Thiamine_Daily_Value = $worksheet->getCell('CI'.$row)->getValue();
		/* added */
		$Thiamine_Daily_Value_PPD = $worksheet->getCell('CJ'.$row)->getValue();
		
		$Riboflavin_Per_Serving = $worksheet->getCell('CK'.$row)->getValue();
		$Riboflavin_Daily_Value = $worksheet->getCell('CL'.$row)->getValue();
		/* added */
		$Riboflavin_Daily_Value_PPD = $worksheet->getCell('CM'.$row)->getValue();
		
		$Niacin_Per_Serving  = $worksheet->getCell('CN'.$row)->getValue();
		$Niacin_Daily_Value = $worksheet->getCell('CO'.$row)->getValue();
		/* added */
		$Niacin_Daily_Value_PPD = $worksheet->getCell('CP'.$row)->getValue();
		
		$VitaminB6_Per_Serving = $worksheet->getCell('CQ'.$row)->getValue();
		$VitaminB6_Daily_Value = $worksheet->getCell('CR'.$row)->getValue();
		/* added */
		$VitaminB6_Daily_Value_PPD = $worksheet->getCell('CS'.$row)->getValue();
		
		$Folate_Per_Serving = $worksheet->getCell('CT'.$row)->getValue();
		$Folate_Daily_Value = $worksheet->getCell('CU'.$row)->getValue();
		/* added */
		$Folate_Daily_Value_PPD = $worksheet->getCell('CV'.$row)->getValue();
		
		$VitaminB12_Per_Serving = $worksheet->getCell('CW'.$row)->getValue();
		$VitaminB12_Daily_Value = $worksheet->getCell('CX'.$row)->getValue();
		/* added */
		$VitaminB12_Daily_Value_PPD = $worksheet->getCell('CY'.$row)->getValue();
		
		$Biotin_PerServing = $worksheet->getCell('CZ'.$row)->getValue();
		$Biotin_Daily_Value = $worksheet->getCell('DA'.$row)->getValue();
		/* added */
		$Biotin_Daily_Value_PPD = $worksheet->getCell('DB'.$row)->getValue();
		
		$Choline_Per_Serving = $worksheet->getCell('DC'.$row)->getValue();
		$Choline_Daily_Value = $worksheet->getCell('DD'.$row)->getValue();
		/* added */
		$Choline_Daily_Value_PPD = $worksheet->getCell('DE'.$row)->getValue();
		
		$Pantothenate_Per_Serving = $worksheet->getCell('DF'.$row)->getValue();
		$Pantothenate_Daily_Value = $worksheet->getCell('DG'.$row)->getValue();
		/* added */
		$Pantothenate_Daily_Value_PPD = $worksheet->getCell('DH'.$row)->getValue();
		
		$Phosphorus_Per_Serving = $worksheet->getCell('DI'.$row)->getValue();
		$Phosphorus_Daily_Value = $worksheet->getCell('DJ'.$row)->getValue();
		/* added */
		$Phosphorus_Daily_Value_PPD = $worksheet->getCell('DK'.$row)->getValue();
		
		$Iodide_Per_Serving = $worksheet->getCell('DL'.$row)->getValue();
		$Iodide_Daily_Value = $worksheet->getCell('DM'.$row)->getValue();
		/* added */
		$Iodide_Daily_Value_PPD = $worksheet->getCell('DN'.$row)->getValue();
		
		$Magnesium_Per_Serving = $worksheet->getCell('DO'.$row)->getValue();
		$Magnesium_Daily_Value = $worksheet->getCell('DP'.$row)->getValue();
		/* added */
		$Magnesium_Daily_Value_PPD = $worksheet->getCell('DQ'.$row)->getValue();

		
		$Zinc_Per_Serving = $worksheet->getCell('DR'.$row)->getValue();
		$Zinc_Daily_Value = $worksheet->getCell('DS'.$row)->getValue();
		/* added */
		$Zinc_Daily_Value_PPD = $worksheet->getCell('DT'.$row)->getValue();
		
		$Selenium_Per_Serving = $worksheet->getCell('DU'.$row)->getValue();
		$Selenium_Daily_Value = $worksheet->getCell('DV'.$row)->getValue();
			/* added */
		$Selenium_Daily_Value_PPD = $worksheet->getCell('DW'.$row)->getValue();
		
		$Copper_Per_Serving = $worksheet->getCell('DX'.$row)->getValue();
		$Copper_Daily_Value = $worksheet->getCell('DY'.$row)->getValue();
			/* added */
		$Copper_Daily_Value_PPD = $worksheet->getCell('DZ'.$row)->getValue();
		
		$Manganese_Per_Serving = $worksheet->getCell('EA'.$row)->getValue();
		$Manganese_Daily_Value = $worksheet->getCell('EB'.$row)->getValue();
		/* added */
		$Manganese_Daily_Value_PPD = $worksheet->getCell('EC'.$row)->getValue();
		
		$Chromium_Per_Serving = $worksheet->getCell('ED'.$row)->getValue();
		$Chromium_Daily_Value = $worksheet->getCell('EE'.$row)->getValue();
		/* added */
		$Chromium_Daily_Value_PPD = $worksheet->getCell('EF'.$row)->getValue();
		
		$Molybdenum_Per_Serving = $worksheet->getCell('EG'.$row)->getValue();
		$Molybdenum_Daily_Value = $worksheet->getCell('EH'.$row)->getValue();
		/* added */
		$Molybdenum_Daily_Value_PPD = $worksheet->getCell('EI'.$row)->getValue();
		
		$Chloride_Per_Serving = $worksheet->getCell('EJ'.$row)->getValue();
		$Chloride_Daily_Value = $worksheet->getCell('EK'.$row)->getValue();
		
		/* added */
		$Chloride_Daily_Value_PPD = $worksheet->getCell('EL'.$row)->getValue();
		
		$Per_Serving_Amount_In_Grams = $worksheet->getCell('EM'.$row)->getValue();
		$Per_Serving_Amount_In_Grams_PPD = $worksheet->getCell('EN'.$row)->getValue();

		$Comment = mysqli_real_escape_string($conn,$worksheet->getCell('EO'.$row)->getValue());
		$Source = mysqli_real_escape_string($conn,$worksheet->getCell('EP'.$row)->getValue());
		
		$Product_Description = mysqli_real_escape_string($conn,$worksheet->getCell('EQ'.$row)->getValue());

		
			if($Record === null or $Label_UPC ===null or $Label_Description ===null  or $Nielsen_Category === null or $Ingredients === null or $Nutrition_Fact_Table===null or $Per_Serving_Amount===null or $Per_Serving_UofM ===null   or $Protein_Per_Serving === null)  
	
			{
		
	
			if($Label_Description ==null){
			$no_description = "A Label without description was skipped";
			$input1= "Record : $Record";
			$skipped_label->push($input1);
	
			
			}else{
			$inputx= "Record : $Record, $Label_Description";
			$skipped_label->push($inputx);
		
		}
			
			
		}else{
			/* We have all mandadory fields */
			/* Check to see if we already have that Label_UPC in the Label's table */
			$label_query = "Select Distinct ProductIDP from $dbname.Package where Label_UPC = $Label_UPC";
			$label_result = mysqli_query($conn,$label_query);
			$rowcount=mysqli_num_rows($label_result);
			
			if($rowcount<1){
		

			$sales_query = "Select Distinct ProductIDS from $dbname.Sales where Sales_UPC = $Neilsen_Item_Rank_UPC";
			$sales_result = mysqli_query($conn,$sales_query);
			$rowcount2=mysqli_num_rows($sales_result);
				if($rowcount2<1){
					/* Create new Product and attach the label to it */
							if($Product_Description ==null){
		   $Product_Description = $Label_Description;
		}
		$query_product="INSERT INTO  $dbname.Product (Description, Brand, Manufacturer) VALUES ('$Product_Description','$Brand', '$Manufacturer')";
		$result = mysqli_query($conn,$query_product);
		$id =  mysqli_insert_id($conn);
		$query_insert ="INSERT Into $dbname.Package(ProductIDP, Label_UPC,Label_Description,PPD_Per_Serving_Amount,PPD_Per_Serving_UofM,Per_Serving_Amount_In_Grams, Per_Serving_Amount_In_Grams_PPD,Package_Size_UofM, Nielsen_Category,Brand,Manufacturer,Country,Package_Size,Number_Of_Units,
				Storage_Type,Storage_Statement,Collection_Date,Health_Claim,Nutrition_Claim,Other_Package_Statement,Suggested_Direction,
				Ingredients,Multipart,Nutrition_Fact_Table,Common_Measure,Per_Serving_Amount,Per_Serving_Unit,Source,Comments,Product_Description) VALUES('$id',
				'$Label_UPC', '$Label_Description','$Per_Serving_Amount_PPD','$Per_Serving_Amount_PPD_UofM','$Per_Serving_Amount_In_Grams','$Per_Serving_Amount_In_Grams_PPD','$Package_Size_UofM', '$Nielsen_Category', '$Brand', '$Manufacturer', '$Country', '$Package_Size', '$Number_Of_Units', '$Storage_Type',
				'$Storage_Statement', '$Collection_Date', '$Health_Claim', '$Nutrient_Claim', '$Other_Package_Statement', '$Suggested_Direction', '$Ingredients',
				'$Multipart', '$Nutrition_Fact_Table', '$Common_Household_Measure', '$Per_Serving_Amount', '$Per_Serving_UofM', '$Source', '$Comment', '$Product_Description')";			
				$result_insert = mysqli_query($conn,$query_insert);	
				
				$query_energy_kcal_as_sold ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_Kcal', 'kcal',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_energy_kcal_as_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_PPD_Kcal', 'kcal',  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
					
				$query_Per_Serving_Energy_Kj ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 47, '$Per_Serving_Energy_Kj', 'kj', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Per_Serving_Energy_PPD_Kj ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 47, '$Per_Serving_Energy_PPD_Kj', 'kj', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

		//$Per_Serving_Energy_Kj = $worksheet->getCell('AC'.$row)->getValue();
		//$Per_Serving_Energy_PPD_Kj = $worksheet->getCell('AD'.$row)->getValue();	

				$query_fat_per_serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 2, '$Fat_Per_Serving', 'g','$Fat_Daily_Value',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				//**********
				$query_fat_daily_value_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 2, '$Fat_Daily_Value_PPD',  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_Saturated_Fat_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 3, '$Saturated_Fat_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Trans_Fat ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,PPD) Select PackageID, 4, '$Trans_Fat_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				//********** Saturated Fat per Serving
				//$query_Saturated_Fat_Daily_Value_PPD ="Insert into $dbname.Product_Component(PackageID, ComponentID,Amount,Amount_Unit_Of_Measure, PPD) Select PackageID, 3, '$Saturated_Fat_Per_Serving', 'g',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				//********** Trans Fat
				//$query_Trans_Fat_Daily_Value_PPD ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount,Amount_Unit_Of_Measure, PPD) Select PackageID, 4,'$Trans_Fat_Per_Serving','g', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			    //**********

				$query_Trans_Fat_Daily_Value_2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 46,'$Trans_And_Saturated_Fat_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Trans_Fat_Daily_Value_PPD_2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 46,'$Trans_And_Saturated_Fat_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

		//$Trans_And_Saturated_Fat_Daily_Vaue = $worksheet->getCell('AJ'.$row)->getValue();
		
		/* added */
		//$Trans_And_Saturated_Fat_Daily_Vaue_PPD = $worksheet->getCell('AK'.$row)->getValue();


				$query_fat_polysunsaturated = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 44, '$Fat_PolyUnsaturated', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_fat_polymonosaturated = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 45, '$Fat_Monounsaturated_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_omega6 = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 5, '$Omega_6_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_omega3 = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 6, '$Omega_3_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Carbohydrate ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 7, '$Carbohydrates_Per_Serving', 'g','$Carbohydrates_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Carbohydrate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 7, '$Carbohydrates_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Fibre ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 8, '$Fibre_Per_Serving', 'g','$Fibre_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Fibre_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 8, '$Fibre_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				$query_Soluble_Fibre_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 9, '$Soluble_Fibre_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Insoluble_Fibre_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 10, '$Insoluble_Fibre_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Sugar_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 11, '$Sugar_Per_Serving', 'g','$Sugar_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Sugar_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 11,'$Sugar_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				$query_Sugar_Alcohols_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 12, '$Sugar_Alcohols_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Starch_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 13, '$Starch_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Protein_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 14, '$Protein_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Cholesterol_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 15, '$Cholesterol_Per_Serving', 'g','$Cholesterol_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Cholesterol_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 15, '$Cholesterol_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Sodium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 16, '$Sodium_Per_Serving', 'g','$Sodium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Sodium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 16, '$Sodium_Daily_Value_PPD', FALSE From $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_Potassium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 17, '$Potassium_Per_Serving', 'mg','$Potassium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Potassium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 17, '$Potassium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Calcium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 18, '$Calcium_Per_Serving', 'mg','$Calcium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Calcium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 18, '$Calcium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Iron_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 19, '$Iron_Per_Serving', 'mg','$Iron_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Iron_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 19, '$Iron_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
	
				$query_VitaminA_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 20, '$VitaminA_Per_Serving', 'um','$VitaminA_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminA_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 20,'$VitaminA_Daily_Value_PPD', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminC_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 21, '$VitaminC_Per_Serving', 'mg','$VitaminC_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminC_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 21,'$VitaminC_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminD_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 22, '$VitaminD_Per_Serving', 'um','$VitaminD_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminD_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 22,'$VitaminD_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminE_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 23, '$VitaminE_Per_Serving', 'mg','$VitaminE_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_VitaminE_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 23, '$VitaminE_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_VitaminK_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 24, '$VitaminK_Per_Serving', 'ug','$VitaminK_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminK_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 24, '$VitaminK_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Thiamine_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 25, '$Thiamine_Per_Serving', 'mg','$Thiamine_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Thiamine_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 25, '$Thiamine_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				

				$query_Riboflavin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 26, '$Riboflavin_Per_Serving', 'mg','$Riboflavin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Riboflavin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 26, '$Riboflavin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Niacin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 27, '$Niacin_Per_Serving', 'mg','$Niacin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Niacin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 27, '$Niacin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_VitaminB6_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 28, '$VitaminB6_Per_Serving', 'mg','$VitaminB6_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminB6_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 28, '$VitaminB6_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
				
				$query_Folate_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 29, '$Folate_Per_Serving', 'ug','$Folate_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_Folate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 29, '$Folate_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_VitaminB12_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 30, '$VitaminB12_Per_Serving', 'mg','$VitaminB12_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				$query_VitaminB12_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 30, '$VitaminB12_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				
				$query_Biotin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 31, '$Biotin_PerServing', 'ug','$Biotin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Biotin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 31, '$Biotin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Choline_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 32, '$Choline_Per_Serving', 'mg','$Choline_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chloline_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 32, '$Choline_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Pantothenate_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 33, '$Pantothenate_Per_Serving', 'mg','$Pantothenate_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Pantothenate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 33, '$Pantothenate_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";			
				
				$query_Phosphorus_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 34, '$Phosphorus_Per_Serving', 'mg','$Phosphorus_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Phosphorus_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 34, '$Phosphorus_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Iodide_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 35, '$Iodide_Per_Serving', 'ug','$Iodide_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Iodide_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 35, '$Iodide_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Magnesium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 36, '$Magnesium_Per_Serving', 'mg','$Magnesium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Magnesium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 36,'$Magnesium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Zinc_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 37, '$Zinc_Per_Serving', 'mg','$Zinc_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Zinc_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 37, '$Zinc_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Selenium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 38, '$Selenium_Per_Serving', 'ug','$Selenium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Selenium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 38, '$Selenium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Copper_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 39, '$Copper_Per_Serving', 'mg','$Copper_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Copper_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 39, '$Copper_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_Manganese_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 40, '$Manganese_Per_Serving', 'mg','$Manganese_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Manganese_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 40, '$Manganese_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Chromium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 41, '$Chromium_Per_Serving', 'ug','$Chromium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chromium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 41, '$Chromium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Molybdenum_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 42, '$Molybdenum_Per_Serving', 'ug','$Molybdenum_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Molybdenum_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 42, '$Molybdenum_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chloride_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 43, '$Chloride_Per_Serving', 'mg','$Chloride_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
				$query_Chloride_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 43, '$Chloride_Daily_Value', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$result_Trans_Saturaded = mysqli_query($conn,$query_Trans_Fat_Daily_Value_2);
				$result_Trans_Saturaded_PPD = mysqli_query($conn,$query_Trans_Fat_Daily_Value_PPD_2);
				
				$result_energy_kcal_as_sold = mysqli_query($conn,$query_energy_kcal_as_sold);
				$result_energy_kcal_as_ppd = mysqli_query($conn,$query_energy_kcal_as_ppd);		
				$result1 = mysqli_query($conn,$query_fat_per_serving);	
				$result2 = mysqli_query($conn,$query_Saturated_Fat_Per_Serving);
				$result3 = mysqli_query($conn,$query_Trans_Fat);
				$result4 = mysqli_query($conn,$query_Carbohydrate);
				$result5 = mysqli_query($conn,$query_Fibre);
				$result6 = mysqli_query($conn,$query_Soluble_Fibre_Per_Serving);
				$result7 = mysqli_query($conn,$query_Insoluble_Fibre_Per_Serving);
				$result8 = mysqli_query($conn,$query_Sugar_Per_Serving);
				$result9 = mysqli_query($conn,$query_Sugar_Alcohols_Per_Serving);
				$result10 = mysqli_query($conn,$query_Starch_Per_Serving);
				$result11 = mysqli_query($conn,$query_Protein_Per_Serving);
				$result12 = mysqli_query($conn,$query_Cholesterol_Per_Serving);
				$result13 = mysqli_query($conn,$query_Sodium_Per_Serving);
				$result14 = mysqli_query($conn,$query_Potassium_Per_Serving);
				$result15 = mysqli_query($conn,$query_Calcium_Per_Serving);
				$result16 = mysqli_query($conn,$query_Iron_Per_Serving);
				$result17 = mysqli_query($conn,$query_VitaminA_Per_Serving);
				$result18 = mysqli_query($conn,$query_VitaminC_Per_Serving);
				$result19 = mysqli_query($conn,$query_VitaminD_Per_Serving);
				$result20 = mysqli_query($conn,$query_VitaminE_Per_Serving);
				$result21 = mysqli_query($conn,$query_VitaminK_Per_Serving);
				$result22 = mysqli_query($conn,$query_Thiamine_Per_Serving);
				$result23 = mysqli_query($conn,$query_Riboflavin_Per_Serving);
				$result24 = mysqli_query($conn,$query_VitaminB6_Per_Serving);
				$result25 = mysqli_query($conn,$query_Folate_Per_Serving);
				$result26 = mysqli_query($conn,$query_VitaminB12_Per_Serving);
				$result27 = mysqli_query($conn,$query_Biotin_Per_Serving);
				$result28 = mysqli_query($conn,$query_Choline_Per_Serving);
				$result29 = mysqli_query($conn,$query_Pantothenate_Per_Serving);
				$result30 = mysqli_query($conn,$query_Phosphorus_Per_Serving);
				$result31 = mysqli_query($conn,$query_Iodide_Per_Serving);
				$result32 = mysqli_query($conn,$query_Magnesium_Per_Serving);
				$result33 = mysqli_query($conn,$query_Zinc_Per_Serving);
				$result34 = mysqli_query($conn,$query_Selenium_Per_Serving);
				$result35 = mysqli_query($conn,$query_Copper_Per_Serving);
				$result36 = mysqli_query($conn,$query_Manganese_Per_Serving);
				$result37 = mysqli_query($conn,$query_Chromium_Per_Serving);
				$result38 = mysqli_query($conn,$query_Molybdenum_Per_Serving);
				$result39 = mysqli_query($conn,$query_Chloride_Per_Serving);
				$result40 = mysqli_query($conn,$query_Niacin_Per_Serving);
				
				$result41 = mysqli_query($conn,$query_fat_daily_value_ppd);
				//$result42 = mysqli_query($conn,$query_Saturated_Fat_Daily_Value_PPD);
				//$result43 = mysqli_query($conn,$query_Trans_Fat_Daily_Value_PPD);
				$result44 = mysqli_query($conn,$query_omega6);
				$result45 = mysqli_query($conn,$query_omega3);

				$result46 = mysqli_query($conn,$query_fat_polysunsaturated);
				$result47 = mysqli_query($conn,$query_fat_polymonosaturated);
				$result48 = mysqli_query($conn,$query_Carbohydrate_ppd);
				$result49 = mysqli_query($conn,$query_Fibre_ppd);
				$result50 = mysqli_query($conn,$query_Sugar_ppd);				
				
				$result51 = mysqli_query($conn,$query_Cholesterol_ppd);
				$result52 = mysqli_query($conn,$query_Sodium_ppd);
				$result53 = mysqli_query($conn,$query_Potassium_ppd);
				$result54 = mysqli_query($conn,$query_Calcium_ppd);
				$result55 = mysqli_query($conn,$query_Iron_ppd);				
				

				$result56 = mysqli_query($conn,$query_VitaminA_ppd);
				$result57 = mysqli_query($conn,$query_VitaminC_ppd);
				$result58 = mysqli_query($conn,$query_VitaminD_ppd);
				$result59 = mysqli_query($conn,$query_VitaminE_ppd);
				$result60 = mysqli_query($conn,$query_VitaminK_ppd);	

				$result61 = mysqli_query($conn,$query_Thiamine_ppd);
				$result62 = mysqli_query($conn,$query_Riboflavin_ppd);
				$result63 = mysqli_query($conn,$query_Niacin_ppd);
				$result64 = mysqli_query($conn,$query_VitaminB6_ppd);
				$result65 = mysqli_query($conn,$query_Folate_ppd);

				$result66 = mysqli_query($conn,$query_VitaminB12_ppd);
				$result67 = mysqli_query($conn,$query_Biotin_ppd);
				$result68 = mysqli_query($conn,$query_Chloline_ppd);
				$result69 = mysqli_query($conn,$query_Pantothenate_ppd);
				$result70 = mysqli_query($conn,$query_Phosphorus_ppd);
				
				$result71 = mysqli_query($conn,$query_Iodide_ppd);
				$result72 = mysqli_query($conn,$query_Magnesium_ppd);
				$result73 = mysqli_query($conn,$query_Zinc_ppd);
				$result74 = mysqli_query($conn,$query_Selenium_ppd);
				$result75 = mysqli_query($conn,$query_Copper_ppd);	

				$result76 = mysqli_query($conn,$query_Manganese_ppd);
				$result77 = mysqli_query($conn,$query_Chromium_ppd);
				$result78 = mysqli_query($conn,$query_Molybdenum_ppd);
				$result79 = mysqli_query($conn,$query_Chloride_ppd);
				$result80 = mysqli_query($conn,$query_Per_Serving_Energy_Kj);  //$query_Per_Serving_Energy_PPD_Kj
				$result81 = mysqli_query($conn,$query_Per_Serving_Energy_PPD_Kj);
				
				$input4= "Record : $Record, $Label_Description";
				
				$new_product->push($input4);
				
				}else{
					/* attach label to corresponding Product --Found in Sales Table*/
					$query1 ="INSERT Into $dbname.Package(ProductIDP, Label_UPC,Label_Description,PPD_Per_Serving_Amount,PPD_Per_Serving_UofM,Per_Serving_Amount_In_Grams, Per_Serving_Amount_In_Grams_PPD,Package_Size_UofM, Nielsen_Category,Brand,Manufacturer,Country,Package_Size,Number_Of_Units,
				Storage_Type,Storage_Statement,Collection_Date,Health_Claim,Nutrition_Claim,Other_Package_Statement,Suggested_Direction,
				Ingredients,Multipart,Nutrition_Fact_Table,Common_Measure,Per_Serving_Amount,Per_Serving_Unit,Source,Comments,Product_Description) Select Distinct ProductIDS,
				'$Label_UPC', '$Label_Description','$Per_Serving_Amount_PPD','$Per_Serving_Amount_PPD_UofM','$Per_Serving_Amount_In_Grams','$Per_Serving_Amount_In_Grams_PPD','$Package_Size_UofM', '$Nielsen_Category', '$Brand', '$Manufacturer', '$Country', '$Package_Size', '$Number_Of_Units', '$Storage_Type',
				'$Storage_Statement', '$Collection_Date', '$Health_Claim', '$Nutrient_Claim', '$Other_Package_Statement', '$Suggested_Direction', '$Ingredients',
				'$Multipart', '$Nutrition_Fact_Table', '$Common_Household_Measure', '$Per_Serving_Amount', '$Per_Serving_UofM', '$Source', '$Comment', '$Product_Description' from $dbname.Sales Where Sales_UPC = $Neilsen_Item_Rank_UPC";	
				$result_query1 = mysqli_query($conn,$query1); 
				
				if($Product_Description != null){
					
					$query_update="UPDATE  $dbname.Product SET Description='$Product_Description', Brand='$Brand',Manufacturer='$Manufacturer' WHERE ProductID=(Select Distinct ProductIDS from $dbname.Sales Where Sales_UPC = $Neilsen_Item_Rank_UPC)";
					$result_update = mysqli_query($conn,$query_update);
					
				}else{
					$query_update="UPDATE  $dbname.Product SET Brand='$Brand',Manufacturer='$Manufacturer' WHERE ProductID=(Select Distinct ProductIDS from $dbname.Sales Where Sales_UPC = '$Neilsen_Item_Rank_UPC')";
					$result_update = mysqli_query($conn,$query_update);
					
				}
						
				
				
				$query_energy_kcal_as_sold ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_Kcal', 'kcal',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_energy_kcal_as_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_PPD_Kcal', 'kcal',  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_energy_kj_as_sold ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_Kj', 'kj',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_energy_kj_as_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_PPD_Kj', 'kj',  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				

				$query_fat_per_serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 2, '$Fat_Per_Serving', 'g','$Fat_Daily_Value',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				//**********
				$query_fat_daily_value_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 2, '$Fat_Daily_Value_PPD',  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_Saturated_Fat_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 3, '$Saturated_Fat_Per_Serving', 'g','$Trans_And_Saturated_Fat_Daily_Vaue', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Trans_Fat ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 4, '$Trans_Fat_Per_Serving', 'g','$Trans_And_Saturated_Fat_Daily_Vaue', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
						
				//**********
/* 								$query_Trans_Fat_Daily_Value_2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 46,'$Trans_And_Saturated_Fat_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Trans_Fat_Daily_Value_PPD_2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 46,'$Trans_And_Saturated_Fat_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

			 */	
				
				$query_Saturated_Fat_Daily_Value_PPD ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, PPD) Select PackageID, 3, '$Saturated_Fat_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				//**********
				$query_Trans_Fat_Daily_Value_PPD ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, PPD) Select PackageID, 4,'$Trans_Fat_Per_Serving', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			    //**********
				
				$query_Trans_Fat_Daily_Value_1 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 46,'$Trans_And_Saturated_Fat_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Trans_Fat_Daily_Value_PPD_1 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 46,'$Trans_And_Saturated_Fat_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				
				$query_fat_polysunsaturated = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 44, '$Fat_PolyUnsaturated', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_fat_polymonosaturated = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 45, '$Fat_Monounsaturated_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_omega6 = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 5, '$Omega_6_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_omega3 = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 6, '$Omega_3_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Carbohydrate ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 7, '$Carbohydrates_Per_Serving', 'g','$Carbohydrates_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Carbohydrate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 7, '$Carbohydrates_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Fibre ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 8, '$Fibre_Per_Serving', 'g','$Fibre_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Fibre_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 8, '$Fibre_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
							
				$query_Soluble_Fibre_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 9, '$Soluble_Fibre_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Insoluble_Fibre_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 10, '$Insoluble_Fibre_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Sugar_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 11, '$Sugar_Per_Serving', 'g','$Sugar_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Sugar_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 11,'$Sugar_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				$query_Sugar_Alcohols_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 12, '$Sugar_Alcohols_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Starch_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 13, '$Starch_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Protein_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 14, '$Protein_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Cholesterol_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 15, '$Cholesterol_Per_Serving', 'g','$Cholesterol_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Cholesterol_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 15, '$Cholesterol_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Sodium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 16, '$Sodium_Per_Serving', 'g','$Sodium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Sodium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 16, '$Sodium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_Potassium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 17, '$Potassium_Per_Serving', 'mg','$Potassium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Potassium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 17, '$Potassium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Calcium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 18, '$Calcium_Per_Serving', 'mg','$Calcium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Calcium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 18, '$Calcium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Iron_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 19, '$Iron_Per_Serving', 'mg','$Iron_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Iron_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 19, '$Iron_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
	
				$query_VitaminA_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 20, '$VitaminA_Per_Serving', 'um','$VitaminA_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminA_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 20,'$VitaminA_Daily_Value_PPD', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminC_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 21, '$VitaminC_Per_Serving', 'mg','$VitaminC_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminC_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 21,'$VitaminC_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminD_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 22, '$VitaminD_Per_Serving', 'um','$VitaminD_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminD_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 22,'$VitaminD_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminE_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 23, '$VitaminE_Per_Serving', 'mg','$VitaminE_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_VitaminE_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 23, '$VitaminE_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_VitaminK_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 24, '$VitaminK_Per_Serving', 'ug','$VitaminK_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminK_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 24, '$VitaminK_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Thiamine_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 25, '$Thiamine_Per_Serving', 'mg','$Thiamine_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Thiamine_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 25, '$Thiamine_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				

				$query_Riboflavin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 26, '$Riboflavin_Per_Serving', 'mg','$Riboflavin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Riboflavin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 26, '$Riboflavin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Niacin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 27, '$Niacin_Per_Serving', 'mg','$Niacin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Niacin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 27, '$Niacin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_VitaminB6_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 28, '$VitaminB6_Per_Serving', 'mg','$VitaminB6_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminB6_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 28, '$VitaminB6_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
				
				$query_Folate_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 29, '$Folate_Per_Serving', 'ug','$Folate_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_Folate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 29, '$Folate_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_VitaminB12_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 30, '$VitaminB12_Per_Serving', 'mg','$VitaminB12_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				$query_VitaminB12_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 30, '$VitaminB12_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				
				$query_Biotin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 31, '$Biotin_PerServing', 'ug','$Biotin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Biotin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 31, '$Biotin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Choline_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 32, '$Choline_PerServing', 'mg','$Choline_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chloline_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 32, '$Choline_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Pantothenate_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 33, '$Pantothenate_Per_Serving', 'mg','$Pantothenate_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Pantothenate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 33, '$Pantothenate_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";			
				
				$query_Phosphorus_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 34, '$Phosphorus_Per_Serving', 'mg','$Phosphorus_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Phosphorus_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 34, '$Phosphorus_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Iodide_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 35, '$Iodide_Per_Serving', 'ug','$Iodide_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Iodide_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 35, '$Iodide_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Magnesium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 36, '$Magnesium_Per_Serving', 'mg','$Magnesium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Magnesium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 36,'$Magnesium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Zinc_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 37, '$Zinc_Per_Serving', 'mg','$Zinc_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Zinc_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 37, '$Zinc_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Selenium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 38, '$Selenium_Per_Serving', 'ug','$Selenium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Selenium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 38, '$Selenium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Copper_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 39, '$Copper_Per_Serving', 'mg','$Copper_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Copper_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 39, '$Copper_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_Manganese_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 40, '$Manganese_Per_Serving', 'mg','$Manganese_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Manganese_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 40, '$Manganese_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Chromium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 41, '$Chromium_Per_Serving', 'ug','$Chromium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chromium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 41, '$Chromium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Molybdenum_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 42, '$Molybdenum_Per_Serving', 'ug','$Molybdenum_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Molybdenum_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 42, '$Molybdenum_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chloride_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 43, '$Chloride_Per_Serving', 'mg','$Chloride_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
				$query_Chloride_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 43, '$Chloride_Daily_Value', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

		
				$result_energy_kcal_as_sold_1 = mysqli_query($conn,$query_Trans_Fat_Daily_Value_1);
				$result_energy_kcal_as_ppd_1 = mysqli_query($conn,$query_Trans_Fat_Daily_Value_PPD_1);	
				
				$result_energy_kcal_as_sold = mysqli_query($conn,$query_energy_kcal_as_sold);
				$result_energy_kcal_as_ppd = mysqli_query($conn,$query_energy_kcal_as_ppd);	 //$query_energy_kj_as_sold
				$result_query_energy_kj_as_sold = mysqli_query($conn,$query_energy_kj_as_sold);
				$result_query_energy_kj_as_sold_ppd = mysqli_query($conn,$query_energy_kj_as_ppd);			
				$result1 = mysqli_query($conn,$query_fat_per_serving);	
				$result2 = mysqli_query($conn,$query_Saturated_Fat_Per_Serving);
				$result3 = mysqli_query($conn,$query_Trans_Fat);
				$result4 = mysqli_query($conn,$query_Carbohydrate);
				$result5 = mysqli_query($conn,$query_Fibre);
				$result6 = mysqli_query($conn,$query_Soluble_Fibre_Per_Serving);
				$result7 = mysqli_query($conn,$query_Insoluble_Fibre_Per_Serving);
				$result8 = mysqli_query($conn,$query_Sugar_Per_Serving);
				$result9 = mysqli_query($conn,$query_Sugar_Alcohols_Per_Serving);
				$result10 = mysqli_query($conn,$query_Starch_Per_Serving);
				$result11 = mysqli_query($conn,$query_Protein_Per_Serving);
				$result12 = mysqli_query($conn,$query_Cholesterol_Per_Serving);
				$result13 = mysqli_query($conn,$query_Sodium_Per_Serving);
				$result14 = mysqli_query($conn,$query_Potassium_Per_Serving);
				$result15 = mysqli_query($conn,$query_Calcium_Per_Serving);
				$result16 = mysqli_query($conn,$query_Iron_Per_Serving);
				$result17 = mysqli_query($conn,$query_VitaminA_Per_Serving);
				$result18 = mysqli_query($conn,$query_VitaminC_Per_Serving);
				$result19 = mysqli_query($conn,$query_VitaminD_Per_Serving);
				$result20 = mysqli_query($conn,$query_VitaminE_Per_Serving);
				$result21 = mysqli_query($conn,$query_VitaminK_Per_Serving);
				$result22 = mysqli_query($conn,$query_Thiamine_Per_Serving);
				$result23 = mysqli_query($conn,$query_Riboflavin_Per_Serving);
				$result24 = mysqli_query($conn,$query_VitaminB6_Per_Serving);
				$result25 = mysqli_query($conn,$query_Folate_Per_Serving);
				$result26 = mysqli_query($conn,$query_VitaminB12_Per_Serving);
				$result27 = mysqli_query($conn,$query_Biotin_Per_Serving);
				$result28 = mysqli_query($conn,$query_Choline_Per_Serving);
				$result29 = mysqli_query($conn,$query_Pantothenate_Per_Serving);
				$result30 = mysqli_query($conn,$query_Phosphorus_Per_Serving);
				$result31 = mysqli_query($conn,$query_Iodide_Per_Serving);
				$result32 = mysqli_query($conn,$query_Magnesium_Per_Serving);
				$result33 = mysqli_query($conn,$query_Zinc_Per_Serving);
				$result34 = mysqli_query($conn,$query_Selenium_Per_Serving);
				$result35 = mysqli_query($conn,$query_Copper_Per_Serving);
				$result36 = mysqli_query($conn,$query_Manganese_Per_Serving);
				$result37 = mysqli_query($conn,$query_Chromium_Per_Serving);
				$result38 = mysqli_query($conn,$query_Molybdenum_Per_Serving);
				$result39 = mysqli_query($conn,$query_Chloride_Per_Serving);
				$result40 = mysqli_query($conn,$query_Niacin_Per_Serving);
				
				$result41 = mysqli_query($conn,$query_fat_daily_value_ppd);
				$result42 = mysqli_query($conn,$query_Saturated_Fat_Daily_Value_PPD);
				$result43 = mysqli_query($conn,$query_Trans_Fat_Daily_Value_PPD);
				$result44 = mysqli_query($conn,$query_omega6);
				$result45 = mysqli_query($conn,$query_omega3);

				$result46 = mysqli_query($conn,$query_fat_polysunsaturated);
				$result47 = mysqli_query($conn,$query_fat_polymonosaturated);
				$result48 = mysqli_query($conn,$query_Carbohydrate_ppd);
				$result49 = mysqli_query($conn,$query_Fibre_ppd);
				$result50 = mysqli_query($conn,$query_Sugar_ppd);				
				
				$result51 = mysqli_query($conn,$query_Cholesterol_ppd);
				$result52 = mysqli_query($conn,$query_Sodium_ppd);
				$result53 = mysqli_query($conn,$query_Potassium_ppd);
				$result54 = mysqli_query($conn,$query_Calcium_ppd);
				$result55 = mysqli_query($conn,$query_Iron_ppd);				
				

				$result56 = mysqli_query($conn,$query_VitaminA_ppd);
				$result57 = mysqli_query($conn,$query_VitaminC_ppd);
				$result58 = mysqli_query($conn,$query_VitaminD_ppd);
				$result59 = mysqli_query($conn,$query_VitaminE_ppd);
				$result60 = mysqli_query($conn,$query_VitaminK_ppd);	

				$result61 = mysqli_query($conn,$query_Thiamine_ppd);
				$result62 = mysqli_query($conn,$query_Riboflavin_ppd);
				$result63 = mysqli_query($conn,$query_Niacin_ppd);
				$result64 = mysqli_query($conn,$query_VitaminB6_ppd);
				$result65 = mysqli_query($conn,$query_Folate_ppd);

				$result66 = mysqli_query($conn,$query_VitaminB12_ppd);
				$result67 = mysqli_query($conn,$query_Biotin_ppd);
				$result68 = mysqli_query($conn,$query_Chloline_ppd);
				$result69 = mysqli_query($conn,$query_Pantothenate_ppd);
				$result70 = mysqli_query($conn,$query_Phosphorus_ppd);
				
				$result71 = mysqli_query($conn,$query_Iodide_ppd);
				$result72 = mysqli_query($conn,$query_Magnesium_ppd);
				$result73 = mysqli_query($conn,$query_Zinc_ppd);
				$result74 = mysqli_query($conn,$query_Selenium_ppd);
				$result75 = mysqli_query($conn,$query_Copper_ppd);	

				$result76 = mysqli_query($conn,$query_Manganese_ppd);
				$result77 = mysqli_query($conn,$query_Chromium_ppd);
				$result78 = mysqli_query($conn,$query_Molybdenum_ppd);
				$result79 = mysqli_query($conn,$query_Chloride_ppd);				
				
				$input3= "Record : $Record, $Label_Description";
				$linked_sales->push($input3);
				
				
				
				}
				
			}else{
				/* attach label to corresponding Product --Found in Label Table*/
				$query2 ="INSERT Into $dbname.Package(ProductIDP, Label_UPC,Label_Description,PPD_Per_Serving_Amount,PPD_Per_Serving_UofM,Per_Serving_Amount_In_Grams, Per_Serving_Amount_In_Grams_PPD,Package_Size_UofM, Nielsen_Category,Brand,Manufacturer,Country,Package_Size,Number_Of_Units,
				Storage_Type,Storage_Statement,Collection_Date,Health_Claim,Nutrition_Claim,Other_Package_Statement,Suggested_Direction,
				Ingredients,Multipart,Nutrition_Fact_Table,Common_Measure,Per_Serving_Amount,Per_Serving_Unit,Source,Comments,Product_Description) Select Distinct ProductIDP,
				'$Label_UPC', '$Label_Description','$Per_Serving_Amount_PPD','$Per_Serving_Amount_PPD_UofM','$Per_Serving_Amount_In_Grams','$Per_Serving_Amount_In_Grams_PPD','$Package_Size_UofM', '$Nielsen_Category', '$Brand', '$Manufacturer', '$Country', '$Package_Size', '$Number_Of_Units', '$Storage_Type',
				'$Storage_Statement', '$Collection_Date', '$Health_Claim', '$Nutrient_Claim', '$Other_Package_Statement', '$Suggested_Direction', '$Ingredients',
				'$Multipart', '$Nutrition_Fact_Table', '$Common_Household_Measure', '$Per_Serving_Amount', '$Per_Serving_UofM', '$Source', '$Comment', '$Product_Description' from $dbname.Package Where Label_UPC = '$Label_UPC'";
				$result_query2 = mysqli_query($conn,$query2); 
				
				
				if($Product_Description != null){
					
					$query_update="UPDATE  $dbname.Product SET Description='$Product_Description', Brand='$Brand', Manufacturer='$Manufacturer' WHERE ProductID=(Select Distinct ProductIDP from $dbname.Package Where Label_UPC = '$Label_UPC')";
					$result_update = mysqli_query($conn,$query_update);
					
				}else{
					$query_update="UPDATE  $dbname.Product SET Brand='$Brand',Manufacturer='$Manufacturer' WHERE ProductID=(Select Distinct ProductIDP from $dbname.Package Where Label_UPC = '$Label_UPC')";
					$result_update = mysqli_query($conn,$query_update);
					
				}

				
				$query_energy_kcal_as_sold ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_Kcal', 'kcal',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_energy_kcal_as_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 1, '$Per_Serving_Energy_PPD_Kcal', 'kcal',  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				

				$query_fat_per_serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 2, '$Fat_Per_Serving', 'g','$Fat_Daily_Value'  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				//**********
				$query_fat_daily_value_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 2, '$Fat_Daily_Value_PPD'  FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_Saturated_Fat_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 3, '$Saturated_Fat_Per_Serving', 'g','$Trans_And_Saturated_Fat_Daily_Vaue',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Trans_Fat ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 4, '$Trans_Fat_Per_Serving', 'g','$Trans_And_Saturated_Fat_Daily_Vaue', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				//**********
				$query_Saturated_Fat_Daily_Value_PPD ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 3, '$Saturated_Fat_Per_Serving', 'g','$Trans_And_Saturated_Fat_Daily_Vaue',  TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				//**********
				$query_Trans_Fat_Daily_Value_PPD ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 4,'$Trans_And_Saturated_Fat_Daily_Vaue_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			    //**********
				$query_fat_polysunsaturated = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 44, '$Fat_PolyUnsaturated', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_fat_polymonosaturated = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 45, '$Fat_Monounsaturated_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_omega6 = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 5, '$Omega_6_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_omega3 = "Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 6, '$Omega_3_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Carbohydrate ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 7, '$Carbohydrates_Per_Serving', 'g','$Carbohydrates_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Carbohydrate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 7, '$Carbohydrates_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Fibre ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 8, '$Fibre_Per_Serving', 'g','$Fibre_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Fibre_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 8, '$Fibre_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				$query_Soluble_Fibre_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 9, '$Soluble_Fibre_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Insoluble_Fibre_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 10, '$Insoluble_Fibre_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Sugar_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 11, '$Sugar_Per_Serving', 'g','$Sugar_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Sugar_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 11,'$Sugar_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				
				$query_Sugar_Alcohols_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 12, '$Sugar_Alcohols_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Starch_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 13, '$Starch_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Protein_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, PPD) Select PackageID, 14, '$Protein_Per_Serving', 'g', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				$query_Cholesterol_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 15, '$Cholesterol_Per_Serving', 'g','$Cholesterol_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Cholesterol_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 15, '$Cholesterol_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Sodium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 16, '$Sodium_Per_Serving', 'g','$Sodium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Sodium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 16, '$Sodium_Daily_Value_PPD', TRUE FALSE $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_Potassium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 17, '$Potassium_Per_Serving', 'mg','$Potassium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Potassium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 17, '$Potassium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Calcium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 18, '$Calcium_Per_Serving', 'mg','$Calcium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Calcium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 18, '$Calcium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Iron_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 19, '$Iron_Per_Serving', 'mg','$Iron_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Iron_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 19, '$Iron_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
	
				$query_VitaminA_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 20, '$VitaminA_Per_Serving', 'um','$VitaminA_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminA_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 20,'$VitaminA_Daily_Value_PPD', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminC_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 21, '$VitaminC_Per_Serving', 'mg','$VitaminC_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminC_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 21,'$VitaminC_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminD_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 22, '$VitaminD_Per_Serving', 'um','$VitaminD_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminD_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 22,'$VitaminD_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_VitaminE_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 23, '$VitaminE_Per_Serving', 'mg','$VitaminE_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_VitaminE_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 23, '$VitaminE_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";


				$query_VitaminK_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 24, '$VitaminK_Per_Serving', 'ug','$VitaminK_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminK_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 24, '$VitaminK_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Thiamine_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 25, '$Thiamine_Per_Serving', 'mg','$Thiamine_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Thiamine_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 25, '$Thiamine_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				

				$query_Riboflavin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 26, '$Riboflavin_Per_Serving', 'mg','$Riboflavin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Riboflavin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 26, '$Riboflavin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_Niacin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 27, '$Niacin_Per_Serving', 'mg','$Niacin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Niacin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 27, '$Niacin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$query_VitaminB6_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 28, '$VitaminB6_Per_Serving', 'mg','$VitaminB6_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_VitaminB6_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 28, '$VitaminB6_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
				
				$query_Folate_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 29, '$Folate_Per_Serving', 'ug','$Folate_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_Folate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 29, '$Folate_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_VitaminB12_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 30, '$VitaminB12_Per_Serving', 'mg','$VitaminB12_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				$query_VitaminB12_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 30, '$VitaminB12_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
		
				
				$query_Biotin_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 31, '$Biotin_PerServing', 'ug','$Biotin_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Biotin_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 31, '$Biotin_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Choline_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 32, '$Choline_PerServing', 'mg','$Choline_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chloline_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 32, '$Choline_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Pantothenate_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 33, '$Pantothenate_Per_Serving', 'mg','$Pantothenate_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Pantothenate_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 33, '$Pantothenate_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";			
				
				$query_Phosphorus_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 34, '$Phosphorus_Per_Serving', 'mg','$Phosphorus_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Phosphorus_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 34, '$Phosphorus_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Iodide_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 35, '$Iodide_Per_Serving', 'ug','$Iodide_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Iodide_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 35, '$Iodide_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Magnesium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 36, '$Magnesium_Per_Serving', 'mg','$Magnesium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Magnesium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 36,'$Magnesium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Zinc_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 37, '$Zinc_Per_Serving', 'mg','$Zinc_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Zinc_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 37, '$Zinc_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				
				$query_Selenium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 38, '$Selenium_Per_Serving', 'ug','$Selenium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Selenium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 38, '$Selenium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Copper_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 39, '$Copper_Per_Serving', 'mg','$Copper_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Copper_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID,Daily_Value, PPD) Select PackageID, 39, '$Copper_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
			
				$query_Manganese_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 40, '$Manganese_Per_Serving', 'mg','$Manganese_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				$query_Manganese_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 40, '$Manganese_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Chromium_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 41, '$Chromium_Per_Serving', 'ug','$Chromium_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chromium_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 41, '$Chromium_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				
				$query_Molybdenum_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 42, '$Molybdenum_Per_Serving', 'ug','$Molybdenum_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Molybdenum_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 42, '$Molybdenum_Daily_Value_PPD', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
				
				$query_Chloride_Per_Serving ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure,Daily_Value, PPD) Select PackageID, 43, '$Chloride_Per_Serving', 'mg','$Chloride_Daily_Value', TRUE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";
	
				$query_Chloride_ppd ="Insert into $dbname.Product_Component(PackageID, ComponentID, Daily_Value, PPD) Select PackageID, 43, '$Chloride_Daily_Value', FALSE from $dbname.Package where ProductIDP = (Select Distinct ProductIDP from $dbname.Package where Label_UPC = '$Label_UPC')";

				
				$result_energy_kcal_as_sold = mysqli_query($conn,$query_energy_kcal_as_sold);
				$result_energy_kcal_as_ppd = mysqli_query($conn,$query_energy_kcal_as_ppd);		
				$result1 = mysqli_query($conn,$query_fat_per_serving);	
				$result2 = mysqli_query($conn,$query_Saturated_Fat_Per_Serving);
				$result3 = mysqli_query($conn,$query_Trans_Fat);
				$result4 = mysqli_query($conn,$query_Carbohydrate);
				$result5 = mysqli_query($conn,$query_Fibre);
				$result6 = mysqli_query($conn,$query_Soluble_Fibre_Per_Serving);
				$result7 = mysqli_query($conn,$query_Insoluble_Fibre_Per_Serving);
				$result8 = mysqli_query($conn,$query_Sugar_Per_Serving);
				$result9 = mysqli_query($conn,$query_Sugar_Alcohols_Per_Serving);
				$result10 = mysqli_query($conn,$query_Starch_Per_Serving);
				$result11 = mysqli_query($conn,$query_Protein_Per_Serving);
				$result12 = mysqli_query($conn,$query_Cholesterol_Per_Serving);
				$result13 = mysqli_query($conn,$query_Sodium_Per_Serving);
				$result14 = mysqli_query($conn,$query_Potassium_Per_Serving);
				$result15 = mysqli_query($conn,$query_Calcium_Per_Serving);
				$result16 = mysqli_query($conn,$query_Iron_Per_Serving);
				$result17 = mysqli_query($conn,$query_VitaminA_Per_Serving);
				$result18 = mysqli_query($conn,$query_VitaminC_Per_Serving);
				$result19 = mysqli_query($conn,$query_VitaminD_Per_Serving);
				$result20 = mysqli_query($conn,$query_VitaminE_Per_Serving);
				$result21 = mysqli_query($conn,$query_VitaminK_Per_Serving);
				$result22 = mysqli_query($conn,$query_Thiamine_Per_Serving);
				$result23 = mysqli_query($conn,$query_Riboflavin_Per_Serving);
				$result24 = mysqli_query($conn,$query_VitaminB6_Per_Serving);
				$result25 = mysqli_query($conn,$query_Folate_Per_Serving);
				$result26 = mysqli_query($conn,$query_VitaminB12_Per_Serving);
				$result27 = mysqli_query($conn,$query_Biotin_Per_Serving);
				$result28 = mysqli_query($conn,$query_Choline_Per_Serving);
				$result29 = mysqli_query($conn,$query_Pantothenate_Per_Serving);
				$result30 = mysqli_query($conn,$query_Phosphorus_Per_Serving);
				$result31 = mysqli_query($conn,$query_Iodide_Per_Serving);
				$result32 = mysqli_query($conn,$query_Magnesium_Per_Serving);
				$result33 = mysqli_query($conn,$query_Zinc_Per_Serving);
				$result34 = mysqli_query($conn,$query_Selenium_Per_Serving);
				$result35 = mysqli_query($conn,$query_Copper_Per_Serving);
				$result36 = mysqli_query($conn,$query_Manganese_Per_Serving);
				$result37 = mysqli_query($conn,$query_Chromium_Per_Serving);
				$result38 = mysqli_query($conn,$query_Molybdenum_Per_Serving);
				$result39 = mysqli_query($conn,$query_Chloride_Per_Serving);
				$result40 = mysqli_query($conn,$query_Niacin_Per_Serving);
				
				$result41 = mysqli_query($conn,$query_fat_daily_value_ppd);
				$result42 = mysqli_query($conn,$query_Saturated_Fat_Daily_Value_PPD);
				$result43 = mysqli_query($conn,$query_Trans_Fat_Daily_Value_PPD);
				$result44 = mysqli_query($conn,$query_omega6);
				$result45 = mysqli_query($conn,$query_omega3);

				$result46 = mysqli_query($conn,$query_fat_polysunsaturated);
				$result47 = mysqli_query($conn,$query_fat_polymonosaturated);
				$result48 = mysqli_query($conn,$query_Carbohydrate_ppd);
				$result49 = mysqli_query($conn,$query_Fibre_ppd);
				$result50 = mysqli_query($conn,$query_Sugar_ppd);				
				
				$result51 = mysqli_query($conn,$query_Cholesterol_ppd);
				$result52 = mysqli_query($conn,$query_Sodium_ppd);
				$result53 = mysqli_query($conn,$query_Potassium_ppd);
				$result54 = mysqli_query($conn,$query_Calcium_ppd);
				$result55 = mysqli_query($conn,$query_Iron_ppd);				
				

				$result56 = mysqli_query($conn,$query_VitaminA_ppd);
				$result57 = mysqli_query($conn,$query_VitaminC_ppd);
				$result58 = mysqli_query($conn,$query_VitaminD_ppd);
				$result59 = mysqli_query($conn,$query_VitaminE_ppd);
				$result60 = mysqli_query($conn,$query_VitaminK_ppd);	

				$result61 = mysqli_query($conn,$query_Thiamine_ppd);
				$result62 = mysqli_query($conn,$query_Riboflavin_ppd);
				$result63 = mysqli_query($conn,$query_Niacin_ppd);
				$result64 = mysqli_query($conn,$query_VitaminB6_ppd);
				$result65 = mysqli_query($conn,$query_Folate_ppd);

				$result66 = mysqli_query($conn,$query_VitaminB12_ppd);
				$result67 = mysqli_query($conn,$query_Biotin_ppd);
				$result68 = mysqli_query($conn,$query_Chloline_ppd);
				$result69 = mysqli_query($conn,$query_Pantothenate_ppd);
				$result70 = mysqli_query($conn,$query_Phosphorus_ppd);
				
				$result71 = mysqli_query($conn,$query_Iodide_ppd);
				$result72 = mysqli_query($conn,$query_Magnesium_ppd);
				$result73 = mysqli_query($conn,$query_Zinc_ppd);
				$result74 = mysqli_query($conn,$query_Selenium_ppd);
				$result75 = mysqli_query($conn,$query_Copper_ppd);	

				$result76 = mysqli_query($conn,$query_Manganese_ppd);
				$result77 = mysqli_query($conn,$query_Chromium_ppd);
				$result78 = mysqli_query($conn,$query_Molybdenum_ppd);
				$result79 = mysqli_query($conn,$query_Chloride_ppd);
				
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
	echo "<h2>Labels linked to new products</h2>";
   while (!$new_product->isEmpty()) { 
                            
        $senditem = $new_product->shift(); 
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
	
	
	
	
	
	
	
	
	