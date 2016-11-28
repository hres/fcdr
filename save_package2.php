<?php include 'connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');




		if(isset($_POST['search'])) {
		error_reporting(E_ALL);
ini_set('display_errors', 1);
				
						
				$energy_amount = mysqli_real_escape_string($conn,$_POST['Energy_Amount_S']);
				$energy_unit = mysqli_real_escape_string($conn,$_POST['Energy_Unit_S']);
				$energy_dvalue = mysqli_real_escape_string($conn,$_POST['Energy_DValue_S']);
				
				$fat_amount = mysqli_real_escape_string($conn,$_POST['Fat_Amount_S']);
				$fat_unit = mysqli_real_escape_string($conn,$_POST['Fat_Unit_S']);
				$fat_dvalue = mysqli_real_escape_string($conn,$_POST['Fat_DValue_S']);
				
				$saturated_fat_amount = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_Amount_S']);
				$saturated_fat_unit = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_Unit_S']);
				$saturated_fat_dvalue = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_DValue_S']);
				
				$trans_fat_amount = mysqli_real_escape_string($conn,$_POST['Trans_Fat_Amount_S']);
				$trans_fat_unit = mysqli_real_escape_string($conn,$_POST['Trans_Fat_Unit_S']);
				$trans_fat_dvalue = mysqli_real_escape_string($conn,$_POST['Trans_Fat_DValue_S']);
				
				$omega6_amount = mysqli_real_escape_string($conn,$_POST['Omega6_Amount_S']);
				$omega6_unit = mysqli_real_escape_string($conn,$_POST['Omega6_Unit_S']);
				$omega6_dvalue = mysqli_real_escape_string($conn,$_POST['Omega6_DValue_S']);
				
				$omega3_amount = mysqli_real_escape_string($conn,$_POST['Omega3_Amount_S']);
				$omega3_unit = mysqli_real_escape_string($conn,$_POST['Omega3_Unit_S']);
				$omega3_dvalue = mysqli_real_escape_string($conn,$_POST['Omega3_DValue_S']);
				
				$carbohydrates_amount = mysqli_real_escape_string($conn,$_POST['Carbohydrates_Amount_S']);
				$carbohydrates_unit = mysqli_real_escape_string($conn,$_POST['Carbohydrates_Unit_S']);
				$carbohydrates_dvalue = mysqli_real_escape_string($conn,$_POST['Carbohydrates_DValue_S']);
				
				$fibre_amount = mysqli_real_escape_string($conn,$_POST['Fibre_Amount_S']);
				$fibre_unit = mysqli_real_escape_string($conn,$_POST['Fibre_Unit_S']);
				$fibre_dvalue = mysqli_real_escape_string($conn,$_POST['Fibre_DValue_S']);
				
				$soluble_fibre_amount = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_Amount_S']);
				$soluble_fibre_unit = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_Unit_S']);
				$soluble_fibre_dvalue = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_DValue_S']);
				
				$insoluble_fibre_amount = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_Amount_S']);
				$insoluble_fibre_unit = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_Unit_S']);
				$insoluble_fibre_dvalue = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_DValue_S']);
				
				$sugar_amount = mysqli_real_escape_string($conn,$_POST['Sugar_Amount_S']);
				$sugar_unit = mysqli_real_escape_string($conn,$_POST['Sugar_Unit_S']);
				$sugar_dvalue = mysqli_real_escape_string($conn,$_POST['Sugar_DValue_S']);
				
				$sugar_alcohols_amount = mysqli_real_escape_string($conn,$_POST['Sugar_Alcohols_Amount_S']);
				$sugar_alcohols_unit = mysqli_real_escape_string($conn,$_POST['Sugar_Alcogols_Unit_S']);
				$sugar_alcohols_dvalue = mysqli_real_escape_string($conn,$_POST['Sugar_Alcohol_DValue_S']);
				
				$starch_amount = mysqli_real_escape_string($conn,$_POST['Starch_Amount_S']);
				$starch_unit = mysqli_real_escape_string($conn,$_POST['Starch_Unit_S']);
				$starch_dvalue = mysqli_real_escape_string($conn,$_POST['Starch_DValue_S']);
				
				$protein_amount = mysqli_real_escape_string($conn,$_POST['Protein_Amount_S']);
				$protein_unit = mysqli_real_escape_string($conn,$_POST['Protein_Unit_S']);
				$protein_dvalue = mysqli_real_escape_string($conn,$_POST['Protein_DValue_S']);
				
				$cholesterol_amount = mysqli_real_escape_string($conn,$_POST['Cholesterol_Amount_S']);
				$cholesterol_unit = mysqli_real_escape_string($conn,$_POST['Cholesterol_Unit_S']);
				$cholesterol_dvalue = mysqli_real_escape_string($conn,$_POST['Cholesterol_DValue_S']);
				
				$sodium_amount = mysqli_real_escape_string($conn,$_POST['Sodium_Amount_S']);
				$sodium_unit = mysqli_real_escape_string($conn,$_POST['Sodium_Unit_S']);
				$sodium_dvalue = mysqli_real_escape_string($conn,$_POST['Sodium_DValue_S']);		
	
				$potassium_amount = mysqli_real_escape_string($conn,$_POST['Potassium_Amount_S']);
				$potassium_unit = mysqli_real_escape_string($conn,$_POST['Potassium_Unit_S']);
				$potassium_dvalue = mysqli_real_escape_string($conn,$_POST['Potassium_DValue_S']);	

				$calcium_amount = mysqli_real_escape_string($conn,$_POST['Calcium_Amount_S']);
				$calcium_unit = mysqli_real_escape_string($conn,$_POST['Calcium_Unit_S']);
				$calcium_dvalue = mysqli_real_escape_string($conn,$_POST['Calcium_DValue_S']);	

				$iron_amount = mysqli_real_escape_string($conn,$_POST['Iron_Amount_S']);
				$iron_unit = mysqli_real_escape_string($conn,$_POST['Iron_Unit_S']);
				$iron_dvalue = mysqli_real_escape_string($conn,$_POST['Iron_DValue_S']);	
				
				$vitaminc_amount = mysqli_real_escape_string($conn,$_POST['VitaminC_Amount_S']);
				$vitaminc_unit = mysqli_real_escape_string($conn,$_POST['VitaminC_Unit_S']);
				$vitaminc_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminC_DValue_S']);

				$vitamind_amount = mysqli_real_escape_string($conn,$_POST['VitaminD_Amount_S']);
				$vitamind_unit = mysqli_real_escape_string($conn,$_POST['VitaminD_Unit_S']);
				$vitamind_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminD_DValue_S']);			
				
				$vitamine_amount = mysqli_real_escape_string($conn,$_POST['VitaminE_Amount_S']);
				$vitamine_unit = mysqli_real_escape_string($conn,$_POST['VitaminE_Unit_S']);
				$vitamine_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminE_DValue_S']);			

				$vitamink_amount = mysqli_real_escape_string($conn,$_POST['VitaminK_Amount_S']);
				$vitamink_unit = mysqli_real_escape_string($conn,$_POST['VitaminK_Unit_S']);
				$vitamink_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminK_DValue_S']);	

				$thiamine_amount = mysqli_real_escape_string($conn,$_POST['Thiamine_Amount_S']);
				$thiamine_unit = mysqli_real_escape_string($conn,$_POST['Thiamine_Unit_S']);
				$thiamine_dvalue = mysqli_real_escape_string($conn,$_POST['Thiamine_DValue_S']);	

				$riboflavin_amount = mysqli_real_escape_string($conn,$_POST['Riboflavin_Amount_S']);
				$riboflavin_unit = mysqli_real_escape_string($conn,$_POST['Riboflavin_Unit_S']);
				$riboflavin_dvalue = mysqli_real_escape_string($conn,$_POST['Riboflavin_DValue_S']);	
				
				$niacin_amount = mysqli_real_escape_string($conn,$_POST['Niacin_Amount_S']);
				$niacin_unit = mysqli_real_escape_string($conn,$_POST['Niacin_Unit_S']);
				$niacin_dvalue = mysqli_real_escape_string($conn,$_POST['Niacin_DValue_S']);	

				$vitaminB6_amount = mysqli_real_escape_string($conn,$_POST['VitaminB6_Amount_S']);
				$vitaminB6_unit = mysqli_real_escape_string($conn,$_POST['VitaminB6_Unit_S']);
				$vitaminB6_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminB6_DValue_S']);
				
				$folate_amount = mysqli_real_escape_string($conn,$_POST['Folate_Amount_S']);
				$folate_unit = mysqli_real_escape_string($conn,$_POST['Folate_Unit_S']);
				$folate_dvalue = mysqli_real_escape_string($conn,$_POST['Folate_DValue_S']);
				
				$vitaminB12_amount = mysqli_real_escape_string($conn,$_POST['VitaminB12_Amount_S']);
				$vitaminB12_unit = mysqli_real_escape_string($conn,$_POST['VitaminB12_Unit_S']);
				$vitaminB12_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminB12_DValue_S']);
				
				$biotin_amount = mysqli_real_escape_string($conn,$_POST['Biotin_Amount_S']);
				$biotin_unit = mysqli_real_escape_string($conn,$_POST['Biotin_Unit_S']);
				$biotin_dvalue = mysqli_real_escape_string($conn,$_POST['Biotin_DValue_S']);
				
				$choline_amount = mysqli_real_escape_string($conn,$_POST['Choline_Amount_S']);
				$choline_unit = mysqli_real_escape_string($conn,$_POST['Choline_Unit_S']);
				$choline_dvalue = mysqli_real_escape_string($conn,$_POST['Choline_DValue_S']);
				
				$pantothenate_amount = mysqli_real_escape_string($conn,$_POST['Pantothenate_Amount_S']);
				$pantothenate_unit = mysqli_real_escape_string($conn,$_POST['Pantothenate_Unit_S']);
				$pantothenate_dvalue = mysqli_real_escape_string($conn,$_POST['Pantothenate_DValue_S']);
				
				$phosphorus_amount = mysqli_real_escape_string($conn,$_POST['Phosphorus_Amount_S']);
				$phosphorus_unit = mysqli_real_escape_string($conn,$_POST['Phosphorus_Unit_S']);
				$phosphorus_dvalue = mysqli_real_escape_string($conn,$_POST['Phosphorus_DValue_S']);
				
				$iodide_amount = mysqli_real_escape_string($conn,$_POST['Iodide_Amount_S']);
				$iodide_unit = mysqli_real_escape_string($conn,$_POST['Iodide_Unit_S']);
				$iodide_dvalue = mysqli_real_escape_string($conn,$_POST['Iodide_DValue_S']);
				
				$magnesium_amount = mysqli_real_escape_string($conn,$_POST['Magnesium_Amount_S']);
				$magnesium_unit = mysqli_real_escape_string($conn,$_POST['Magnesium_Unit_S']);
				$magnesium_dvalue = mysqli_real_escape_string($conn,$_POST['Magnesium_DValue_S']);
				
				$zinc_amount = mysqli_real_escape_string($conn,$_POST['Zinc_Amount_S']);
				$zinc_unit = mysqli_real_escape_string($conn,$_POST['Zinc_Unit_S']);
				$zinc_dvalue = mysqli_real_escape_string($conn,$_POST['Zinc_DValue_S']);
				
				$selenium_amount = mysqli_real_escape_string($conn,$_POST['Selenium_Amount_S']);
				$selenium_unit = mysqli_real_escape_string($conn,$_POST['Selenium_Unit_S']);
				$selenium_dvalue = mysqli_real_escape_string($conn,$_POST['Selenium_DValue_S']);
				
				$copper_amount = mysqli_real_escape_string($conn,$_POST['Copper_Amount_S']);
				$copper_unit = mysqli_real_escape_string($conn,$_POST['Copper_Unit_S']);
				$copper_dvalue = mysqli_real_escape_string($conn,$_POST['Copper_DValue_S']);
				
				$manganese_amount = mysqli_real_escape_string($conn,$_POST['Manganese_Amount_S']);
				$manganese_unit = mysqli_real_escape_string($conn,$_POST['Manganese_Unit_S']);
				$manganese_dvalue = mysqli_real_escape_string($conn,$_POST['Manganese_DValue_S']);
				
				$molybdenium_amount = mysqli_real_escape_string($conn,$_POST['Molybdenium_Amount_S']);
				$molybdenium_unit = mysqli_real_escape_string($conn,$_POST['Molybdenium_Unit_S']);
				$molybdenium_dvalue = mysqli_real_escape_string($conn,$_POST['Molybdenium_DValue_S']);
				
				$chloride_amount = mysqli_real_escape_string($conn,$_POST['Chloride_Amount_S']);
				$chloride_unit = mysqli_real_escape_string($conn,$_POST['Chloride_Unit_S']);
				$chloride_dvalue = mysqli_real_escape_string($conn,$_POST['Chloride_DValue_S']);
				
				$vitamina_amount = mysqli_real_escape_string($conn,$_POST['VitaminA_Amount_S']);
				$vitamina_unit = mysqli_real_escape_string($conn,$_POST['VitaminA_Unit_S']);
				$vitamina_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminA_DValue_S']);
				
				$chromium_amount = mysqli_real_escape_string($conn,$_POST['Chromium_Amount_S']);
				$chromium_unit = mysqli_real_escape_string($conn,$_POST['Chromium_Unit_S']);
				$chromium_dvalue = mysqli_real_escape_string($conn,$_POST['Chromium_DValue_S']);
				
				/* other nutrients; */
				
/* 				$energy_amount_sold = mysqli_real_escape_string($conn,$_POST['Energy_Amount']);
				$energy_unit_sold = mysqli_real_escape_string($conn,$_POST['Energy_Unit']);
				$energy_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Energy_DValue']);
				
				$fat_amount_sold = mysqli_real_escape_string($conn,$_POST['Fat_Amount']);
				$fat_unit_sold = mysqli_real_escape_string($conn,$_POST['Fat_Unit_Of']);
				$fat_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Fat_DValue']);
				
				$saturated_fat_amount_sold = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_Amount']);
				$saturated_fat_unit_sold = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_Unit']);
				$saturated_fat_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_DValue']);
				
				$trans_fat_amount_sold = mysqli_real_escape_string($conn,$_POST['Trans_Fat_Amount']);
				$trans_fat_unit_sold = mysqli_real_escape_string($conn,$_POST['Trans_Fat_Unit']);
				$trans_fat_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Trans_Fat_DValue']);
				
				$omega6_amount_sold = mysqli_real_escape_string($conn,$_POST['Omega6_Amount']);
				$omega6_unit_sold = mysqli_real_escape_string($conn,$_POST['Omega6_Unit']);
				$omega6_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Omega6_DValue']);
				
				$omega3_amount_sold = mysqli_real_escape_string($conn,$_POST['Omega3_Amount']);
				$omega3_unit_sold = mysqli_real_escape_string($conn,$_POST['Omega3_Unit']);
				$omega3_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Omega3_DValue']);
				
				$carbohydrates_amount_sold = mysqli_real_escape_string($conn,$_POST['Carbohydrates_Amount']);
				$carbohydrates_unit_sold = mysqli_real_escape_string($conn,$_POST['Carbohydrates_Unit']);
				$carbohydrates_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Carbohydrates_DValue']);
				
				$fibre_amount_sold = mysqli_real_escape_string($conn,$_POST['Fibre_Amount']);
				$fibre_unit_sold = mysqli_real_escape_string($conn,$_POST['Fibre_Unit']);
				$fibre_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Fibre_DValue']);
				
				$soluble_fibre_amount_sold = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_Amount']);
				$soluble_fibre_unit_sold = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_Unit']);
				$soluble_fibre_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_DValue']);
				
				$insoluble_fibre_amount_sold = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_Amount']);
				$insoluble_fibre_unit_sold = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_Unit']);
				$insoluble_fibre_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_DValue']);
				
				$sugar_amount_sold = mysqli_real_escape_string($conn,$_POST['Sugar_Amount']);
				$sugar_unit_sold = mysqli_real_escape_string($conn,$_POST['Sugar_Unit']);
				$sugar_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Sugar_DValue']);
				
				$sugar_alcohols_amount_sold = mysqli_real_escape_string($conn,$_POST['Sugar_Alcohols_Amount']);
				$sugar_alcohols_unit_sold = mysqli_real_escape_string($conn,$_POST['Sugar_Alcogols_Unit']);
				$sugar_alcohols_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Sugar_Alcohol_DValue']);
				
				$starch_amount_sold = mysqli_real_escape_string($conn,$_POST['Starch_Amount']);
				$starch_unit_sold = mysqli_real_escape_string($conn,$_POST['Starch_Unit']);
				$starch_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Starch_DValue']);
				
				$protein_amount_sold = mysqli_real_escape_string($conn,$_POST['Protein_Amount']);
				$protein_unit_sold = mysqli_real_escape_string($conn,$_POST['Protein_Unit']);
				$protein_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Protein_DValue']);
				
				$cholesterol_amount_sold = mysqli_real_escape_string($conn,$_POST['Cholesterol_Amount']);
				$cholesterol_unit_sold = mysqli_real_escape_string($conn,$_POST['Cholesterol_Unit']);
				$cholesterol_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Cholesterol_DValue']);
				
				$sodium_amount_sold = mysqli_real_escape_string($conn,$_POST['Sodium_Amount']);
				$sodium_unit_sold = mysqli_real_escape_string($conn,$_POST['Sodium_Unit']);
				$sodium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Sodium_DValue']);		
	
				$potassium_amount_sold = mysqli_real_escape_string($conn,$_POST['Potassium_Amount']);
				$potassium_unit_sold = mysqli_real_escape_string($conn,$_POST['Potassium_Unit']);
				$potassium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Potassium_DValue']);	

				$calcium_amount_sold = mysqli_real_escape_string($conn,$_POST['Calcium_Amount']);
				$calcium_unit_sold = mysqli_real_escape_string($conn,$_POST['Calcium_Unit']);
				$calcium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Calcium_DValue']);	

				$iron_amount_sold = mysqli_real_escape_string($conn,$_POST['Iron_Amount']);
				$iron_unit_sold = mysqli_real_escape_string($conn,$_POST['Iron_Unit']);
				$iron_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Iron_DValue']);	
				
				$vitaminc_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminC_Amount']);
				$vitaminc_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminC_Unit']);
				$vitaminc_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminC_DValue']);

				$vitamind_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminD_Amount']);
				$vitamind_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminD_Unit']);
				$vitamind_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminD_DValue']);			
				
				$vitamine_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminE_Amount']);
				$vitamine_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminE_Unit']);
				$vitamine_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminE_DValue']);			

				$vitamink_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminK_Amount']);
				$vitamink_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminK_Unit']);
				$vitamink_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminK_DValue']);	

				$thiamine_amount_sold = mysqli_real_escape_string($conn,$_POST['Thiamine_Amount']);
				$thiamine_unit_sold = mysqli_real_escape_string($conn,$_POST['Thiamine_Unit']);
				$thiamine_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Thiamine_DValue']);	

				$riboflavin_amount_sold = mysqli_real_escape_string($conn,$_POST['Riboflavin_Amount']);
				$riboflavin_unit_sold = mysqli_real_escape_string($conn,$_POST['Riboflavin_Unit']);
				$riboflavin_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Riboflavin_DValue']);	
				
				$niacin_amount_sold = mysqli_real_escape_string($conn,$_POST['Niacin_Amount']);
				$niacin_unit_sold = mysqli_real_escape_string($conn,$_POST['Niacin_Unit']);
				$niacin_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Niacin_DValue']);	

				$vitaminB6_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminB6_Amount']);
				$vitaminB6_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminB6_Unit']);
				$vitaminB6_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminB6_DValue']);
				
				$folate_amount_sold = mysqli_real_escape_string($conn,$_POST['Folate_Amount']);
				$folate_unit_sold = mysqli_real_escape_string($conn,$_POST['Folate_Unit']);
				$folate_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Folate_DValue']);
				
				$vitaminB12_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminB12_Amount']);
				$vitaminB12_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminB12_Unit']);
				$vitaminB12_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminB12_DValue']);
				
				$biotin_amount_sold = mysqli_real_escape_string($conn,$_POST['Biotin_Amount']);
				$biotin_unit_sold = mysqli_real_escape_string($conn,$_POST['Biotin_Unit']);
				$biotin_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Biotin_DValue']);
				
				$choline_amount_sold = mysqli_real_escape_string($conn,$_POST['Choline_Amount']);
				$choline_unit_sold = mysqli_real_escape_string($conn,$_POST['Choline_Unit']);
				$choline_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Choline_DValue']);
				
				$pantothenate_amount_sold = mysqli_real_escape_string($conn,$_POST['Pantothenate_Amount']);
				$pantothenate_unit_sold = mysqli_real_escape_string($conn,$_POST['Pantothenate_Unit']);
				$pantothenate_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Pantothenate_DValue']);
				
				$phosphorus_amount_sold = mysqli_real_escape_string($conn,$_POST['Phosphorus_Amount']);
				$phosphorus_unit_sold = mysqli_real_escape_string($conn,$_POST['Phosphorus_Unit']);
				$phosphorus_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Phosphorus_DValue']);
				
				$iodide_amount_sold = mysqli_real_escape_string($conn,$_POST['Iodide_Amount']);
				$iodide_unit_sold = mysqli_real_escape_string($conn,$_POST['Iodide_Unit']);
				$iodide_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Iodide_DValue']);
				
				$magnesium_amount_sold = mysqli_real_escape_string($conn,$_POST['Magnesium_Amount']);
				$magnesium_unit_sold = mysqli_real_escape_string($conn,$_POST['Magnesium_Unit']);
				$magnesium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Magnesium_DValue']);
				
				$zinc_amount_sold = mysqli_real_escape_string($conn,$_POST['Zinc_Amount']);
				$zinc_unit_sold = mysqli_real_escape_string($conn,$_POST['Zinc_Unit']);
				$zinc_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Zinc_DValue']);
				
				$selenium_amount_sold = mysqli_real_escape_string($conn,$_POST['Selenium_Amount']);
				$selenium_unit_sold = mysqli_real_escape_string($conn,$_POST['Selenium_Unit']);
				$selenium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Selenium_DValue']);
				
				$copper_amount_sold = mysqli_real_escape_string($conn,$_POST['Copper_Amount']);
				$copper_unit_sold = mysqli_real_escape_string($conn,$_POST['Copper_Unit']);
				$copper_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Copper_DValue']);
				
				$manganese_amount_sold = mysqli_real_escape_string($conn,$_POST['Manganese_Amount']);
				$manganese_unit_sold = mysqli_real_escape_string($conn,$_POST['Manganese_Unit']);
				$manganese_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Manganese_DValue']);
				
				$molybdenium_amount_sold = mysqli_real_escape_string($conn,$_POST['Molybdenium_Amount']);
				$molybdenium_unit_sold = mysqli_real_escape_string($conn,$_POST['Molybdenium_Unit']);
				$molybdenium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Molybdenium_DValue']);
				
				$chloride_amount_sold = mysqli_real_escape_string($conn,$_POST['Chloride_Amount']);
				$chloride_unit_sold = mysqli_real_escape_string($conn,$_POST['Chloride_Unit']);
				$chloride_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Chloride_DValue']);
				
				$vitamina_amount_sold = mysqli_real_escape_string($conn,$_POST['VitaminA_Amount']);
				$vitamina_unit_sold = mysqli_real_escape_string($conn,$_POST['VitaminA_Unit']);
				$vitamina_dvalue_sold = mysqli_real_escape_string($conn,$_POST['VitaminA_DValue']);
				
				$chromium_amount_sold = mysqli_real_escape_string($conn,$_POST['Chromium_Amount']);
				$chromium_unit_sold = mysqli_real_escape_string($conn,$_POST['Chromium_Unit']);
				$chromium_dvalue_sold = mysqli_real_escape_string($conn,$_POST['Chromium_DValue']);	 */
			

/* 						$query = "select * from $dbname.Product_Component where PackageID = '$PackageID'";
			$result = mysqli_query($conn,$query);
						if (!$result ) {
			echo "ERROR";

				}
			
			$rowcount=mysqli_num_rows($result);
			if($rowcount>0){      */
						
			
				//$result = mysqli_query($conn,$query);
	
				
			$query1 = "UPDATE $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$energy_amount', PC.Amount_Unit_Of_Measure = '$energy_unit', PC.Daily_Value = '$energy_dvalue' where  C.Component_Name = 'Energy' and   PC.PackageID=$PackageID AND PPD = 0";
			$query2 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$fat_amount', PC.Amount_Unit_Of_Measure = '$fat_unit', PC.Daily_Value = '$fat_dvalue' where  C.Component_Name = 'Fat' and   PC.PackageID=$PackageID AND PPD = 0";
			$query3 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$saturated_fat_amount', PC.Amount_Unit_Of_Measure = '$saturated_fat_unit', PC.Daily_Value = '$saturated_fat_dvalue' where  C.Component_Name = 'Saturated Fat' and   PC.PackageID=$PackageID AND PPD = 0";
			$query4 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$trans_fat_amount', PC.Amount_Unit_Of_Measure = '$trans_fat_unit', PC.Daily_Value = '$trans_fat_dvalue' where  C.Component_Name = 'Trans Fat' and   PC.PackageID=$PackageID AND PPD = 0";
			$query5 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$omega6_amount', PC.Amount_Unit_Of_Measure = '$omega6_unit', PC.Daily_Value = '$omega6_dvalue' where  C.Component_Name = 'Omega-6 Polyunsaturated Fat' and   PC.PackageID=$PackageID AND PPD = 0";
			$query6 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$omega3_amount', PC.Amount_Unit_Of_Measure = '$omega3_unit', PC.Daily_Value = '$omega3_dvalue' where  C.Component_Name = 'Omega-3 Polyunsaturated Fat' and   PC.PackageID=$PackageID AND PPD = 0";
			$query7 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$carbohydrates_amount', PC.Amount_Unit_Of_Measure = '$carbohydrates_unit', PC.Daily_Value = '$carbohydrates_dvalue' where  C.Component_Name = 'Carbohydrates' and   PC.PackageID=$PackageID AND PPD = 0";
			$query8 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$fibre_amount', PC.Amount_Unit_Of_Measure = '$fibre_unit', PC.Daily_Value = '$fibre_dvalue' where  C.Component_Name = 'Fibre' and   PC.PackageID=$PackageID AND PPD = 0";
			$query9 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$soluble_fibre_amount', PC.Amount_Unit_Of_Measure = '$soluble_fibre_unit' PC.Daily_Value = '$soluble_fibre_dvalue' where  C.Component_Name = 'Soluble Fibre' and   PC.PackageID=$PackageID AND PPD = 0";
			$query10 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$insoluble_fibre_amount', PC.Amount_Unit_Of_Measure = '$insoluble_fibre_unit', PC.Daily_Value = '$insoluble_fibre_dvalue' where  C.Component_Name = 'Insoluble Fibre' and   PC.PackageID=$PackageID AND PPD = 0";
			$query11 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$sugar_amount', PC.Amount_Unit_Of_Measure = '$sugar_unit', PC.Daily_Value = '$sugar_dvalue' where  C.Component_Name = 'Sugars' and   PC.PackageID=$PackageID AND PPD = 0";
			$query12 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$sugar_alcohols_amount', PC.Amount_Unit_Of_Measure = '$sugar_alcohols_unit', PC.Daily_Value = '$sugar_alcohols_unit' where  C.Component_Name = 'Sugars Alcohol' and   PC.PackageID=$PackageID AND PPD = 0";
			$query13 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$starch_amount', PC.Amount_Unit_Of_Measure = '$starch_unit', PC.Daily_Value = '$starch_unit' where  C.Component_Name = 'Starch' and   PC.PackageID=$PackageID AND PPD = 0";
			$query14 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$protein_amount', PC.Amount_Unit_Of_Measure = '$protein_unit', PC.Daily_Value = '$protein_dvalue' where  C.Component_Name = 'Protein' and   PC.PackageID=$PackageID AND PPD = 0";
			$query15 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$cholesterol_amount', PC.Amount_Unit_Of_Measure = '$cholesterol_unit', PC.Daily_Value = '$cholesterol_dvalue' where  C.Component_Name = 'Cholesterol' and   PC.PackageID=$PackageID AND PPD = 0";
			$query16 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$sodium_amount', PC.Amount_Unit_Of_Measure = '$sodium_unit', PC.Daily_Value = '$sodium_dvalue' where  C.Component_Name = 'Sodium' and   PC.PackageID=$PackageID AND PPD = 0";
			$query17 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$potassium_amount', PC.Amount_Unit_Of_Measure = '$potassium_unit', PC.Daily_Value = '$potassium_dvalue' where  C.Component_Name = 'Potassium' and   PC.PackageID=$PackageID AND PPD = 0";
			$query18 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$calcium_amount', PC.Amount_Unit_Of_Measure = '$calcium_unit', PC.Daily_Value = '$calcium_dvalue' where  C.Component_Name = 'Calcium' and   PC.PackageID=$PackageID AND PPD = 0";
			$query19 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$iron_amount', PC.Amount_Unit_Of_Measure = '$iron_unit', PC.Daily_Value = '$iron_dvalue' where  C.Component_Name = 'Iron' and   PC.PackageID=$PackageID AND PPD = 0";

			$query20 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamina_amount', PC.Amount_Unit_Of_Measure = '$vitamina_unit', PC.Daily_Value = '$vitamina_dvalue' where  C.Component_Name = 'Vitamin A' and   PC.PackageID=$PackageID AND PPD = 0";
			
			
			$query21 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitaminc_amount', PC.Amount_Unit_Of_Measure = '$vitaminc_unit', PC.Daily_Value = '$vitaminc_dvalue' where  C.Component_Name = 'Vitamin C' and   PC.PackageID=$PackageID AND PPD = 0";
			$query22 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamind_amount', PC.Amount_Unit_Of_Measure = '$vitamind_unit', PC.Daily_Value = '$vitamind_dvalue' where  C.Component_Name = 'Vitamin D' and   PC.PackageID=$PackageID AND PPD = 0";
			$query23 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamine_amount', PC.Amount_Unit_Of_Measure = '$vitamine_unit', PC.Daily_Value = '$vitamind_dvalue' where  C.Component_Name = 'Vitamin E' and   PC.PackageID=$PackageID AND PPD = 0";
			$query24 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamink_amount', PC.Amount_Unit_Of_Measure = '$vitamink_unit', PC.Daily_Value = '$vitamink_dvalue' where  C.Component_Name = 'Vitamin K' and   PC.PackageID=$PackageID AND PPD = 0";
			$query25 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$thiamine_amount', PC.Amount_Unit_Of_Measure = '$thiamine_unit', PC.Daily_Value = '$thiamine_dvalue' where  C.Component_Name = 'Thiamine' and   PC.PackageID=$PackageID AND PPD = 0";
			$query26 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$riboflavin_amount', PC.Amount_Unit_Of_Measure = '$riboflavin_unit', PC.Daily_Value = '$riboflavin_dvalue' where  C.Component_Name = 'Riboflavin' and   PC.PackageID=$PackageID AND PPD = 0";
			$query27 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$niacin_amount', PC.Amount_Unit_Of_Measure = '$niacin_unit', PC.Daily_Value = '$niacin_dvalue' where  C.Component_Name = 'Niacin' and   PC.PackageID=$PackageID AND PPD = 0";
			$query28 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitaminB6_amount', PC.Amount_Unit_Of_Measure = '$vitaminB6_unit', PC.Daily_Value = '$vitaminB6_dvalue' where  C.Component_Name = 'Vitamin B6' and   PC.PackageID=$PackageID AND PPD = 0";
			$query29 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitaminB12_amount', PC.Amount_Unit_Of_Measure = '$vitaminB12_unit', PC.Daily_Value = '$vitaminB12_dvalue' where  C.Component_Name = 'Vitamin B12' and   PC.PackageID=$PackageID AND PPD = 0";
			$query30 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$folate_amount', PC.Amount_Unit_Of_Measure = '$folate_unit', PC.Daily_Value = '$folate_dvalue' where  C.Component_Name = 'Folate' and   PC.PackageID=$PackageID AND PPD = 0";
			$query31 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$biotin_amount', PC.Amount_Unit_Of_Measure = '$biotin_unit', PC.Daily_Value = '$biotin_dvalue' where  C.Component_Name = 'Biotin' and   PC.PackageID=$PackageID AND PPD = 0";
			$query32 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$choline_amount', PC.Amount_Unit_Of_Measure = '$choline_unit', PC.Daily_Value = '$choline_dvalue' where  C.Component_Name = 'Choline' and   PC.PackageID=$PackageID AND PPD = 0";
			$query33 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$pantothenate_amount', PC.Amount_Unit_Of_Measure = '$pantothenate_unit', PC.Daily_Value = '$pantothenate_dvalue' where  C.Component_Name = 'Pantothenate' and   PC.PackageID=$PackageID AND PPD = 0";
			$query34 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$phosphorus_amount', PC.Amount_Unit_Of_Measure = '$phosphorus_unit', PC.Daily_Value = '$phosphorus_dvalue' where  C.Component_Name = 'Phosphorus' and   PC.PackageID=$PackageID AND PPD = 0";
			$query35 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$iodide_amount', PC.Amount_Unit_Of_Measure = '$iodide_unit', PC.Daily_Value = '$iodide_dvalue' where  C.Component_Name = 'Iodide' and   PC.PackageID=$PackageID AND PPD = 0";
			$query36 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$magnesium_amount', PC.Amount_Unit_Of_Measure = '$magnesium_unit', PC.Daily_Value = '$magnesium_dvalue' where  C.Component_Name = 'Magnesium' and   PC.PackageID=$PackageID AND PPD = 0";
			$query37 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$zinc_amount', PC.Amount_Unit_Of_Measure = '$zinc_unit', PC.Daily_Value = '$zinc_dvalue' where  C.Component_Name = 'Zinc' and   PC.PackageID=$PackageID AND PPD = 0";
			$query38 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$selenium_amount', PC.Amount_Unit_Of_Measure = '$selenium_unit', PC.Daily_Value = '$selenium_dvalue' where  C.Component_Name = 'Selenium' and   PC.PackageID=$PackageID AND PPD = 0";
			$query39 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$copper_amount', PC.Amount_Unit_Of_Measure = '$copper_unit', PC.Daily_Value = '$copper_dvalue' where  C.Component_Name = 'Copper' and   PC.PackageID=$PackageID AND PPD = 0";
			$query40 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$manganese_amount', PC.Amount_Unit_Of_Measure = '$manganese_unit', PC.Daily_Value = '$manganese_dvalue' where  C.Component_Name = 'Manganese' and   PC.PackageID=$PackageID AND PPD = 0";
			
			$query41 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$chromium_amount', PC.Amount_Unit_Of_Measure = '$chromium_unit', PC.Daily_Value = '$chromium_dvalue' where  C.Component_Name = 'Chromium' and   PC.PackageID=$PackageID AND PPD = 0";

			$query42 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$molybdenium_amount', PC.Amount_Unit_Of_Measure = '$molybdenium_unit', PC.Daily_Value = '$molybdenium_unit' where  C.Component_Name = 'Molybdenium' and   PC.PackageID=$PackageID AND PPD = 0";
			$query43 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$chloride_amount', PC.Amount_Unit_Of_Measure = '$chloride_unit', PC.Daily_Value = '$chloride_dvalue' where  C.Component_Name = 'Chloride' and   PC.PackageID=$PackageID AND PPD = 0";

	/* 			
	} else{
				
				
				
				$query1 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount', '$energy_unit', '$energy_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";			
				$query2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 2, '$fat_amount', '$fat_unit', '$fat_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query3 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 3, '$saturated_fat_amount', '$saturated_fat_unit', '$saturated_fat_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query4 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 4, '$trans_fat_amount', '$trans_fat_unit', '$trans_fat_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query5 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 5, '$omega6_amount', '$omega6_unit', '$omega6_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query6 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 6, '$omega3_amount', '$omega3_unit', '$omega3_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query7 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 7, '$carbohydrates_amount', '$carbohydrates_unit', '$carbohydrates_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query8 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 8, '$fibre_amount', '$fibre_unit', '$fibre_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query9 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 9, '$soluble_fibre_amount', '$soluble_fibre_unit', '$soluble_fibre_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query10 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 10, '$insoluble_fibre_amount', '$insoluble_fibre_unit', '$insoluble_fibre_dvalue', FALSE from $dbname.Package PackageID = '$PackageID'";
				$query11="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 11, '$sugar_amount', '$sugar_unit', '$sugar_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query12="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 12, '$sugar_alcohols_amount', '$sugar_alcohols_unit', '$sugar_alcohols_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query13 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 13, '$starch_amount', '$starch_unit', '$starch_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query14 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 14, '$protein_amount', '$protein_unit', '$protein_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query15 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 15, '$cholesterol_amount', '$cholesterol_unit', '$cholesterol_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query16 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 16, '$sodium_amount', '$sodium_unit', '$sodium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
			
				$query17 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 17, '$potassium_amount', '$potassium_unit', '$potassium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query18 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 18, '$calcium_amount', '$calcium_unit', '$calcium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query19 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 19, '$iron_amount', '$iron_unit', '$iron_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				
				$query20 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 20, '$vitamina_amount', '$vitamina_unit', '$vitamina_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				
				
				$query21 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 21, '$vitaminc_amount', '$vitaminc_unit', '$vitaminc_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query22 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 22, '$vitamind_amount', '$vitamind_unit', '$vitamind_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query23 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 23, '$vitamine_amount', '$vitamine_unit', '$vitamine_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query24 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 24, '$vitamink_amount', '$vitamink_unit', '$vitaminB12_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query25 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 25, '$thiamine_amount', '$thiamine_unit', '$thiamine_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query26 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 26, '$riboflavin_amount', '$riboflavin_unit', '$riboflavin_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query27="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 27, '$niacin_amount', '$niacin_unit', '$niacin_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query28="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 28, '$vitaminB6_amount', '$vitaminB6_unit', '$vitaminB6_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query29="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 29, '$folate_amount', '$folate_unit', '$folate_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query30 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 30, '$vitaminB12_amount', '$vitaminB12_unit', '$vitaminB12_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query31 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 31, '$biotin_amount', '$biotin_unit', '$biotin_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query32 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 32, '$choline_amount', '$choline_unit', '$choline_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query33 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 33, '$pantothenate_amount', '$pantothenate_unit', '$pantothenate_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";

				$query34 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 34, '$phosphorus_amount', '$phosphorus_unit', '$phosphorus_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query35 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 35, '$iodide_Amount', '$iodide_unit', '$iodide_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query36 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 36, '$magnesium_amount', '$magnesium_unit', '$magnesium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query37 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 37, '$zinc_amount', '$zinc_unit', '$zinc_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query38 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 38, '$selenium_amount', '$selenium_unit', '$selenium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query39 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 39, '$copper_amount', '$copper_unit', '$copper_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query40 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 40, '$manganese_amount', '$manganese_unit', '$manganese_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
			
				$query41 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 41, '$chromium_amount', '$chromium_unit', '$chromium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";

	
				$query42 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 42, '$molybdenium_amount', '$molybdenium_unit', '$molybdenium_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
				$query43 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 43, '$chloride_amount', '$chloride_unit', '$chloride_dvalue', FALSE from $dbname.Package where PackageID = '$PackageID'";
	 */		
			
	/* 			
				$query1_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount_sold', '$energy_unit_sold', '$energy_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query2_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 2, '$fat_amount_sold', '$fat_unit_sold', '$fat_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query3_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 3, '$saturated_fat_amount_sold', '$saturated_fat_unit_sold', '$saturated_fat_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query4_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 4, '$trans_fat_amount_sold', '$trans_fat_unit_sold', '$trans_fat_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query5_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 5, '$omega6_amount_sold', '$omega6_unit_sold', '$omega6_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query6_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 6, '$omega3_amount_sold', '$omega3_unit_sold', '$omega3_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query7_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 7, '$carbohydrates_amount_sold', '$carbohydrates_unit_sold', '$carbohydrates_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query8_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 8, '$fibre_amount_sold', '$fibre_unit_sold', '$fibre_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query9_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 9, '$soluble_fibre_amount_sold', '$soluble_fibre_unit_sold', '$soluble_fibre_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query10_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 10, '$insoluble_fibre_amount_sold', '$insoluble_fibre_unit_sold', '$insoluble_fibre_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query11_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 11, '$sugar_amount_sold', '$sugar_unit_sold', '$sugar_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query12_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 12, '$sugar_alcohols_amount_sold', '$sugar_alcohols_unit_sold', '$sugar_alcohols_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query13_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 13, '$starch_amount_sold', '$starch_unit_sold', '$starch_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query14_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 14, '$protein_amount_sold', '$protein_unit_sold', '$protein_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query15_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 15, '$cholesterol_amount_sold', '$cholesterol_unit_sold', '$cholesterol_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query16_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 16, '$sodium_amount_sold', '$sodium_unit_sold', '$sodium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
			
				$query17_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 17, '$potassium_amount_sold', '$potassium_unit_sold', '$potassium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query18_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 18, '$calcium_amount_sold', '$calcium_unit_sold', '$calcium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query19_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 19, '$iron_amount_sold', '$iron_unit_sold', '$iron_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				
				$query20_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 20, '$vitamina_amount_sold', '$vitamina_unit_sold', '$vitamina_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";

				
				$query21_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 21, '$vitaminc_amount_sold', '$vitaminc_unit_sold', '$vitaminc_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query22_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 22, '$vitamind_amount_sold', '$vitamind_unit_sold', '$vitamind_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query23_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 23, '$vitamine_amount_sold', '$vitamine_unit_sold', '$vitamine_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query24_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 24, '$vitamink_amount_sold', '$vitamink_unit_sold', '$vitamink_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query25_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 25, '$thiamine_amount_sold', '$thiamine_unit_sold', '$thiamine_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query26_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 26, '$riboflavin_amount_sold', '$riboflavin_unit_sold', '$riboflavin_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query27_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 27, '$niacin_amount_sold', '$niacin_unit_sold', '$niacin_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query28_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 28, '$vitaminB6_amount_sold', '$vitaminB6_unit_sold', '$vitaminB6_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query29_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 29, '$folate_amount_sold', '$folate_unit_sold', '$folate_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query30_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 30, '$vitaminB12_amount_sold', '$vitaminB12_unit_sold', '$vitaminB12_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query31_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 31, '$biotin_amount_sold', '$biotin_unit_sold', '$biotin_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query32_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 32, '$choline_amount_sold', '$choline_unit_sold', '$choline_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query33_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 33, '$pantothenate_amount_sold', '$pantothenate_unit_sold', '$pantothenate_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";

				$query34_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 34, '$phosphorus_amount_sold', '$phosphorus_unit_sold', '$phosphorus_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query35_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 35, '$iodide_Amount_sold', '$iodide_unit_sold', '$iodide_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query36_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 36, '$magnesium_amount_sold', '$magnesium_unit_sold', '$magnesium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query37_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 37, '$zinc_amount_sold', '$zinc_unit_sold', '$zinc_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query38_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 38, '$selenium_amount_sold', '$selenium_unit_sold', '$selenium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query39_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 39, '$copper_amount_sold', '$copper_unit_sold', '$copper_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query40_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 40, '$manganese_amount_sold', '$manganese_unit_sold', '$manganese_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				
				$query41_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 41, '$chromium_amount_sold', '$chromium_unit_sold', '$chromium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";

				
				$query42_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 42, '$molybdenium_amount_sold', '$molybdenium_unit_sold', '$molybdenium_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
				$query43_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 43, '$chloride_amount_sold', '$chloride_unit_sold', '$chloride_dvalue_sold', TRUE from $dbname.Package where PackageID = '$PackageID'";
 */
	//}	

				$result1 = mysqli_query($conn,$query1);
				$result2 = mysqli_query($conn,$query2);
		    	$result3 = mysqli_query($conn,$query3);
				$result4 = mysqli_query($conn,$query4);
				$result5 = mysqli_query($conn,$query5);
				$result6 = mysqli_query($conn,$query6);
				$result7 = mysqli_query($conn,$query7);
				$result8 = mysqli_query($conn,$query8);
				$result9 = mysqli_query($conn,$query9);
				$result10 = mysqli_query($conn,$query10);
				$result11 = mysqli_query($conn,$query11);
				$result12 = mysqli_query($conn,$query12);
				$result13 = mysqli_query($conn,$query13);
				$result14 = mysqli_query($conn,$query14);
				$result15 = mysqli_query($conn,$query15);
				$result16 = mysqli_query($conn,$query16);
				
				$result17 = mysqli_query($conn,$query18);
				$result18 = mysqli_query($conn,$query19);
		    	$result19 = mysqli_query($conn,$query20);
				$result20 = mysqli_query($conn,$query21);
				$result21 = mysqli_query($conn,$query22);
				$result22 = mysqli_query($conn,$query23);
				$result23 = mysqli_query($conn,$query24);
				$result24 = mysqli_query($conn,$query25);
				$result25 = mysqli_query($conn,$query26);
				$result26 = mysqli_query($conn,$query27);
				$result27 = mysqli_query($conn,$query28);
				$result28 = mysqli_query($conn,$query29);
				$result29 = mysqli_query($conn,$query30);
				$result30 = mysqli_query($conn,$query31);
				$result31 = mysqli_query($conn,$query32);
				$result32 = mysqli_query($conn,$query33);

				$result33 = mysqli_query($conn,$query34);
				$result34 = mysqli_query($conn,$query35);
		    	$result35 = mysqli_query($conn,$query36);
				$result36 = mysqli_query($conn,$query37);
				$result37 = mysqli_query($conn,$query38);
				$result38 = mysqli_query($conn,$query39);
				$result39 = mysqli_query($conn,$query40);
				$result40 = mysqli_query($conn,$query41);
				
				$result41 = mysqli_query($conn,$query17);
				$result42 = mysqli_query($conn,$query42);
				
				$result43 = mysqli_query($conn,$query43);	
				
			/* 	$result1_ = mysqli_query($conn,$query1_);
				$result2_  = mysqli_query($conn,$query2_);
		    	$result3_  = mysqli_query($conn,$query3_);
				$result4_ = mysqli_query($conn,$query4_);
				$result5_ = mysqli_query($conn,$query5_);
				$result6_ = mysqli_query($conn,$query6_);
				$result7_ = mysqli_query($conn,$query7_);
				$result8_ = mysqli_query($conn,$query8_);
				$result9_ = mysqli_query($conn,$query9_);
				$result10_ = mysqli_query($conn,$query10_);
				$result11_ = mysqli_query($conn,$query11_);
				$result12_ = mysqli_query($conn,$query12_);
				$result13_ = mysqli_query($conn,$query13_);
				$result14_ = mysqli_query($conn,$query14_);
				$result15_ = mysqli_query($conn,$query15_);
				$result16_ = mysqli_query($conn,$query16_);
				
				$result17_ = mysqli_query($conn,$query18_);
				$result18_ = mysqli_query($conn,$query19_);
		    	$result19_ = mysqli_query($conn,$query20_);
				$result20_ = mysqli_query($conn,$query21_);
				$result21_ = mysqli_query($conn,$query22_);
				$result22_ = mysqli_query($conn,$query23_);
				$result23_ = mysqli_query($conn,$query24_);
				$result24_ = mysqli_query($conn,$query25_);
				$result25_ = mysqli_query($conn,$query26_);
				$result26_ = mysqli_query($conn,$query27_);
				$result27_ = mysqli_query($conn,$query28_);
				$result28_ = mysqli_query($conn,$query29_);
				$result29_ = mysqli_query($conn,$query30_);
				$result30_ = mysqli_query($conn,$query31_);
				$result31_ = mysqli_query($conn,$query32_);
				$result32_ = mysqli_query($conn,$query33_);

				$result33_ = mysqli_query($conn,$query34_);
				$result34_ = mysqli_query($conn,$query35_);
		    	$result35_ = mysqli_query($conn,$query36_);
				$result36_ = mysqli_query($conn,$query37_);
				$result37_ = mysqli_query($conn,$query38_);
				$result38_ = mysqli_query($conn,$query39_);
				$result39_ = mysqli_query($conn,$query40_);
				$result40_ = mysqli_query($conn,$query41_);
				
				$result41_ = mysqli_query($conn,$query17_);
				$result42_ = mysqli_query($conn,$query42_);
				
				$result43_ = mysqli_query($conn,$query43_);	
	 */
	
if (!$result1) {
    echo "ERRORS";
	echo $query1;
}
	
if (!$result) {
    echo "ERRORS";
	
}else {

	echo "Success... ";
echo "<script>setTimeout(\"location.href = 'edit_package.php?PackageID=$packageID';\",200);</script>";

}

}
$conn->close();
?>
