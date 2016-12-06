<?php include 'connection.php';?>

<?php


$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['search'])) {
				$energy_amount = mysqli_real_escape_string($conn,$_POST['Energy_Amount']);
				$energy_unit = mysqli_real_escape_string($conn,$_POST['Energy_Unit']);
				$energy_dvalue = mysqli_real_escape_string($conn,$_POST['Energy_DValue']);
				
				$Energy_kj_Amount = mysqli_real_escape_string($conn,$_POST['Energy_kj_Amount']);
				$Energy_kj_Unit = mysqli_real_escape_string($conn,$_POST['Energy_kj_Unit']);
				$Engergy_kj_DValue = mysqli_real_escape_string($conn,$_POST['Engergy_kj_DValue']);
				
				$Saturated_Trans_Amount = mysqli_real_escape_string($conn,$_POST['Saturated_Trans_Amount']);
				$Saturated_Trans_Unit = mysqli_real_escape_string($conn,$_POST['Saturated_Trans_Unit']);
				$Saturated_Trans_DValue = mysqli_real_escape_string($conn,$_POST['Saturated_Trans_DValue']);
				
				
				
				
				$fat_amount = mysqli_real_escape_string($conn,$_POST['Fat_Amount']);
				$fat_unit = mysqli_real_escape_string($conn,$_POST['Fat_Unit']);
				$fat_dvalue = mysqli_real_escape_string($conn,$_POST['Fat_DValue']);
				
				$saturated_fat_amount = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_Amount']);
				$saturated_fat_unit = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_Unit']);
				$saturated_fat_dvalue = mysqli_real_escape_string($conn,$_POST['Saturated_Fat_DValue']);
				
				$trans_fat_amount = mysqli_real_escape_string($conn,$_POST['Trans_Fat_Amount']);
				$trans_fat_unit = mysqli_real_escape_string($conn,$_POST['Trans_Fat_Unit']);
				$trans_fat_dvalue = mysqli_real_escape_string($conn,$_POST['Trans_Fat_DValue']);
				
				$omega6_amount = mysqli_real_escape_string($conn,$_POST['Omega6_Amount']);
				$omega6_unit = mysqli_real_escape_string($conn,$_POST['Omega6_Unit']);
				$omega6_dvalue = mysqli_real_escape_string($conn,$_POST['Omega6_DValue']);
				
				$omega3_amount = mysqli_real_escape_string($conn,$_POST['Omega3_Amount']);
				$omega3_unit = mysqli_real_escape_string($conn,$_POST['Omega3_Unit']);
				$omega3_dvalue = mysqli_real_escape_string($conn,$_POST['Omega3_DValue']);
				
				$carbohydrates_amount = mysqli_real_escape_string($conn,$_POST['Carbohydrates_Amount']);
				$carbohydrates_unit = mysqli_real_escape_string($conn,$_POST['Carbohydrates_Unit']);
				$carbohydrates_dvalue = mysqli_real_escape_string($conn,$_POST['Carbohydrates_DValue']);
				
				$fibre_amount = mysqli_real_escape_string($conn,$_POST['Fibre_Amount']);
				$fibre_unit = mysqli_real_escape_string($conn,$_POST['Fibre_Unit']);
				$fibre_dvalue = mysqli_real_escape_string($conn,$_POST['Fibre_DValue']);
				
				$soluble_fibre_amount = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_Amount']);
				$soluble_fibre_unit = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_Unit']);
				$soluble_fibre_dvalue = mysqli_real_escape_string($conn,$_POST['Soluble_Fibre_DValue']);
				
				$insoluble_fibre_amount = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_Amount']);
				$insoluble_fibre_unit = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_Unit']);
				$insoluble_fibre_dvalue = mysqli_real_escape_string($conn,$_POST['Insoluble_Fibre_DValue']);
				
				$sugar_amount = mysqli_real_escape_string($conn,$_POST['Sugar_Amount']);
				$sugar_unit = mysqli_real_escape_string($conn,$_POST['Sugar_Unit']);
				$sugar_dvalue = mysqli_real_escape_string($conn,$_POST['Sugar_DValue']);
				
				$sugar_alcohols_amount = mysqli_real_escape_string($conn,$_POST['Sugar_Alcohols_Amount']);
				$sugar_alcohols_unit = mysqli_real_escape_string($conn,$_POST['Sugar_Alcogols_Unit']);
				$sugar_alcohols_dvalue = mysqli_real_escape_string($conn,$_POST['Sugar_Alcohol_DValue']);
				
				$starch_amount = mysqli_real_escape_string($conn,$_POST['Starch_Amount']);
				$starch_unit = mysqli_real_escape_string($conn,$_POST['Starch_Unit']);
				$starch_dvalue = mysqli_real_escape_string($conn,$_POST['Starch_DValue']);
				
				$protein_amount = mysqli_real_escape_string($conn,$_POST['Protein_Amount']);
				$protein_unit = mysqli_real_escape_string($conn,$_POST['Protein_Unit']);
				$protein_dvalue = mysqli_real_escape_string($conn,$_POST['Protein_DValue']);
				
				$cholesterol_amount = mysqli_real_escape_string($conn,$_POST['Cholesterol_Amount']);
				$cholesterol_unit = mysqli_real_escape_string($conn,$_POST['Cholesterol_Unit']);
				$cholesterol_dvalue = mysqli_real_escape_string($conn,$_POST['Cholesterol_DValue']);
				
				$sodium_amount = mysqli_real_escape_string($conn,$_POST['Sodium_Amount']);
				$sodium_unit = mysqli_real_escape_string($conn,$_POST['Sodium_Unit']);
				$sodium_dvalue = mysqli_real_escape_string($conn,$_POST['Sodium_DValue']);		
	
				$potassium_amount = mysqli_real_escape_string($conn,$_POST['Potassium_Amount']);
				$potassium_unit = mysqli_real_escape_string($conn,$_POST['Potassium_Unit']);
				$potassium_dvalue = mysqli_real_escape_string($conn,$_POST['Potassium_DValue']);	

				$calcium_amount = mysqli_real_escape_string($conn,$_POST['Calcium_Amount']);
				$calcium_unit = mysqli_real_escape_string($conn,$_POST['Calcium_Unit']);
				$calcium_dvalue = mysqli_real_escape_string($conn,$_POST['Calcium_DValue']);	

				$iron_amount = mysqli_real_escape_string($conn,$_POST['Iron_Amount']);
				$iron_unit = mysqli_real_escape_string($conn,$_POST['Iron_Unit']);
				$iron_dvalue = mysqli_real_escape_string($conn,$_POST['Iron_DValue']);	
				
				$vitamina_amount = mysqli_real_escape_string($conn,$_POST['VitaminA_Amount']);
				$vitamina_unit = mysqli_real_escape_string($conn,$_POST['VitaminA_Unit']);
				$vitamina_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminA_DValue']);
				
				
				$vitaminc_amount = mysqli_real_escape_string($conn,$_POST['VitaminC_Amount']);
				$vitaminc_unit = mysqli_real_escape_string($conn,$_POST['VitaminC_Unit']);
				$vitaminc_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminC_DValue']);

				$vitamind_amount = mysqli_real_escape_string($conn,$_POST['VitaminD_Amount']);
				$vitamind_unit = mysqli_real_escape_string($conn,$_POST['VitaminD_Unit']);
				$vitamind_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminD_DValue']);			
				
				$vitamine_amount = mysqli_real_escape_string($conn,$_POST['VitaminE_Amount']);
				$vitamine_unit = mysqli_real_escape_string($conn,$_POST['VitaminE_Unit']);
				$vitamine_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminE_DValue']);			

				$vitamink_amount = mysqli_real_escape_string($conn,$_POST['VitaminK_Amount']);
				$vitamink_unit = mysqli_real_escape_string($conn,$_POST['VitaminK_Unit']);
				$vitamink_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminK_DValue']);	

				$thiamine_amount = mysqli_real_escape_string($conn,$_POST['Thiamine_Amount']);
				$thiamine_unit = mysqli_real_escape_string($conn,$_POST['Thiamine_Unit']);
				$thiamine_dvalue = mysqli_real_escape_string($conn,$_POST['Thiamine_DValue']);	

				$riboflavin_amount = mysqli_real_escape_string($conn,$_POST['Riboflavin_Amount']);
				$riboflavin_unit = mysqli_real_escape_string($conn,$_POST['Riboflavin_Unit']);
				$riboflavin_dvalue = mysqli_real_escape_string($conn,$_POST['Riboflavin_DValue']);	
				
				$niacin_amount = mysqli_real_escape_string($conn,$_POST['Niacin_Amount']);
				$niacin_unit = mysqli_real_escape_string($conn,$_POST['Niacin_Unit']);
				$niacin_dvalue = mysqli_real_escape_string($conn,$_POST['Niacin_DValue']);	

				$vitaminB6_amount = mysqli_real_escape_string($conn,$_POST['VitaminB6_Amount']);
				$vitaminB6_unit = mysqli_real_escape_string($conn,$_POST['VitaminB6_Unit']);
				$vitaminB6_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminB6_DValue']);
				
				$folate_amount = mysqli_real_escape_string($conn,$_POST['Folate_Amount']);
				$folate_unit = mysqli_real_escape_string($conn,$_POST['Folate_Unit']);
				$folate_dvalue = mysqli_real_escape_string($conn,$_POST['Folate_DValue']);
				
				$vitaminB12_amount = mysqli_real_escape_string($conn,$_POST['VitaminB12_Amount']);
				$vitaminB12_unit = mysqli_real_escape_string($conn,$_POST['VitaminB12_Unit']);
				$vitaminB12_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminB12_DValue']);
				
				$biotin_amount = mysqli_real_escape_string($conn,$_POST['Biotin_Amount']);
				$biotin_unit = mysqli_real_escape_string($conn,$_POST['Biotin_Unit']);
				$biotin_dvalue = mysqli_real_escape_string($conn,$_POST['Biotin_DValue']);
				
				$choline_amount = mysqli_real_escape_string($conn,$_POST['Choline_Amount']);
				$choline_unit = mysqli_real_escape_string($conn,$_POST['Choline_Unit']);
				$choline_dvalue = mysqli_real_escape_string($conn,$_POST['Choline_DValue']);
				
				$pantothenate_amount = mysqli_real_escape_string($conn,$_POST['Pantothenate_Amount']);
				$pantothenate_unit = mysqli_real_escape_string($conn,$_POST['Pantothenate_Unit']);
				$pantothenate_dvalue = mysqli_real_escape_string($conn,$_POST['Pantothenate_DValue']);
				
				$phosphorus_amount = mysqli_real_escape_string($conn,$_POST['Phosphorus_Amount']);
				$phosphorus_unit = mysqli_real_escape_string($conn,$_POST['Phosphorus_Unit']);
				$phosphorus_dvalue = mysqli_real_escape_string($conn,$_POST['Phosphorus_DValue']);
				
				$iodide_amount = mysqli_real_escape_string($conn,$_POST['Iodide_Amount']);
				$iodide_unit = mysqli_real_escape_string($conn,$_POST['Iodide_Unit']);
				$iodide_dvalue = mysqli_real_escape_string($conn,$_POST['Iodide_DValue']);
				
				$magnesium_amount = mysqli_real_escape_string($conn,$_POST['Magnesium_Amount']);
				$magnesium_unit = mysqli_real_escape_string($conn,$_POST['Magnesium_Unit']);
				$magnesium_dvalue = mysqli_real_escape_string($conn,$_POST['Magnesium_DValue']);
				
				$zinc_amount = mysqli_real_escape_string($conn,$_POST['Zinc_Amount']);
				$zinc_unit = mysqli_real_escape_string($conn,$_POST['Zinc_Unit']);
				$zinc_dvalue = mysqli_real_escape_string($conn,$_POST['Zinc_DValue']);
				
				$selenium_amount = mysqli_real_escape_string($conn,$_POST['Selenium_Amount']);
				$selenium_unit = mysqli_real_escape_string($conn,$_POST['Selenium_Unit']);
				$selenium_dvalue = mysqli_real_escape_string($conn,$_POST['Selenium_DValue']);
				
				$copper_amount = mysqli_real_escape_string($conn,$_POST['Copper_Amount']);
				$copper_unit = mysqli_real_escape_string($conn,$_POST['Copper_Unit']);
				$copper_dvalue = mysqli_real_escape_string($conn,$_POST['Copper_DValue']);
				
				$manganese_amount = mysqli_real_escape_string($conn,$_POST['Manganese_Amount']);
				$manganese_unit = mysqli_real_escape_string($conn,$_POST['Manganese_Unit']);
				$manganese_dvalue = mysqli_real_escape_string($conn,$_POST['Manganese_DValue']);
				
				$chromium_amount = mysqli_real_escape_string($conn,$_POST['Chromium_Amount']);
				$chromium_unit = mysqli_real_escape_string($conn,$_POST['Chromium_Unit']);
				$chromium_dvalue = mysqli_real_escape_string($conn,$_POST['Chromium_DValue']);				
				
				$molybdenium_amount = mysqli_real_escape_string($conn,$_POST['Molybdenium_Amount']);
				$molybdenium_unit = mysqli_real_escape_string($conn,$_POST['Molybdenium_Unit']);
				$molybdenium_dvalue = mysqli_real_escape_string($conn,$_POST['Molybdenium_DValue']);
				
				$chloride_amount = mysqli_real_escape_string($conn,$_POST['Chloride_Amount']);
				$chloride_unit = mysqli_real_escape_string($conn,$_POST['Chloride_Unit']);
				$chloride_dvalue = mysqli_real_escape_string($conn,$_POST['Chloride_DValue']);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
				$Energy_kj_Amount = mysqli_real_escape_string($conn,$_POST['Energy_kj_Amount']);
				$Energy_kj_Unit = mysqli_real_escape_string($conn,$_POST['Energy_kj_Unit']);
				$Engergy_kj_DValue = mysqli_real_escape_string($conn,$_POST['Engergy_kj_DValue']);
				
				$Saturated_Trans_Amount = mysqli_real_escape_string($conn,$_POST['Saturated_Trans_Amount']);
				$Saturated_Trans_Unit = mysqli_real_escape_string($conn,$_POST['Saturated_Trans_Unit']);
				$Saturated_Trans_DValue = mysqli_real_escape_string($conn,$_POST['Saturated_Trans_DValue']);				
	

				$queryx ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 47, '$Energy_kj_Amount', '$Energy_kj_Unit', '$Engergy_kj_DValue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$queryy ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 46, '$Saturated_Trans_Amount', '$Saturated_Trans_Unit', '$Saturated_Trans_DValue', TRUE from $dbname.Package where ProductIDP = '$productID'";
	
				
				$query1 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount', '$energy_unit', '$energy_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 2, '$fat_amount', '$fat_unit', '$fat_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";


				$query3 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 3, '$saturated_fat_amount', '$saturated_fat_unit', '$saturated_fat_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query4 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 4, '$trans_fat_amount', '$trans_fat_unit', '$trans_fat_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query5 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 5, '$omega6_amount', '$omega6_unit', '$omega6_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query6 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 6, '$omega3_amount', '$omega3_unit', '$omega3_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query7 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 7, '$carbohydrates_amount', '$carbohydrates_unit', '$carbohydrates_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query8 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 8, '$fibre_amount', '$fibre_unit', '$fibre_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query9 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 9, '$soluble_fibre_amount', '$soluble_fibre_unit', '$soluble_fibre_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query10 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 10, '$insoluble_fibre_amount', '$insoluble_fibre_unit', '$insoluble_fibre_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query11="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 11, '$sugar_amount', '$sugar_unit', '$sugar_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query12="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 12, '$sugar_alcohols_amount', '$sugar_alcohols_unit', '$sugar_alcohols_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query13 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 13, '$starch_amount', '$starch_unit', '$starch_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query14 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 14, '$protein_amount', '$protein_unit', '$protein_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query15 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 15, '$cholesterol_amount', '$cholesterol_unit', '$cholesterol_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query16 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 16, '$sodium_amount', '$sodium_unit', '$sodium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
			
				$query17 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 17, '$potassium_amount', '$potassium_unit', '$potassium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query18 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 18, '$calcium_amount', '$calcium_unit', '$calcium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query19 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 19, '$iron_amount', '$iron_unit', '$iron_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				
				$query20 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 20, '$vitamina_amount', '$vitamina_unit', '$vitamina_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";

				
				$query21 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 21, '$vitaminc_amount', '$vitaminc_unit', '$vitaminc_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query22 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 22, '$vitamind_amount', '$vitamind_unit', '$vitamind_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query23 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 23, '$vitamine_amount', '$vitamine_unit', '$vitamine_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query24 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 24, '$vitamink_amount', '$vitamink_unit', '$vitaminB12_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query25 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 25, '$thiamine_amount', '$thiamine_unit', '$thiamine_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query26 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 26, '$riboflavin_amount', '$riboflavin_unit', '$riboflavin_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query27="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 27, '$niacin_amount', '$niacin_unit', '$niacin_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query28="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 28, '$vitaminB6_amount', '$vitaminB6_unit', '$vitaminB6_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query29="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 29, '$folate_amount', '$folate_unit', '$folate_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query30 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 30, '$vitaminB12_amount', '$vitaminB12_unit', '$vitaminB12_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query31 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 31, '$biotin_amount', '$biotin_unit', '$biotin_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query32 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 32, '$choline_amount', '$choline_unit', '$choline_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query33 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 33, '$pantothenate_amount', '$pantothenate_unit', '$pantothenate_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";

				$query34 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 34, '$phosphorus_amount', '$phosphorus_unit', '$phosphorus_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query35 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 35, '$iodide_Amount', '$iodide_unit', '$iodide_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query36 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 36, '$magnesium_amount', '$magnesium_unit', '$magnesium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query37 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 37, '$zinc_amount', '$zinc_unit', '$zinc_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query38 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 38, '$selenium_amount', '$selenium_unit', '$selenium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query39 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 39, '$copper_amount', '$copper_unit', '$copper_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query40 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 40, '$manganese_amount', '$manganese_unit', '$manganese_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				
				$query41 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 41, '$chromium_amount', '$chromium_unit', '$chromium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";

				
				$query42 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 42, '$molybdenium_amount', '$molybdenium_unit', '$molybdenium_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";
				$query43 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 43, '$chloride_amount', '$chloride_unit', '$chloride_dvalue', TRUE from $dbname.Package where ProductIDP = '$productID'";

				
				$resultx = mysqli_query($conn,$queryx);
				$resulty = mysqli_query($conn,$queryy);
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
		
		
		}
$conn->close();
?>