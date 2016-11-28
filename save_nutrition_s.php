<?php include 'connection.php';?>

<?php



$productID = ($_GET['ProductID']?$_GET['ProductID']:'');

if(isset($_POST['search'])) {

				$energy_amount = mysqli_real_escape_string($conn,$_POST['Enery_Amount_S']);
				$energy_unit = mysqli_real_escape_string($conn,$_POST['Enery_Unit_S']);
				$energy_dvalue = mysqli_real_escape_string($conn,$_POST['Enery_DValue_S']);
				
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

				$vitamina_amount = mysqli_real_escape_string($conn,$_POST['VitaminA_Amount_S']);
				$vitamina_unit = mysqli_real_escape_string($conn,$_POST['VitaminA_Unit_S']);
				$vitamina_dvalue = mysqli_real_escape_string($conn,$_POST['VitaminA_DValue_S']);

				
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
				
				$chromium_amount = mysqli_real_escape_string($conn,$_POST['Chromium_Amount_S']);
				$chromium_unit = mysqli_real_escape_string($conn,$_POST['Chromium_Unit_S']);
				$chromium_dvalue = mysqli_real_escape_string($conn,$_POST['Chromium_DValue_S']);
							
				$molybdenium_amount = mysqli_real_escape_string($conn,$_POST['Molybdenium_Amount_S']);
				$molybdenium_unit = mysqli_real_escape_string($conn,$_POST['Molybdenium_Unit_S']);
				$molybdenium_dvalue = mysqli_real_escape_string($conn,$_POST['Molybdenium_DValue_S']);
				
				$chloride_amount = mysqli_real_escape_string($conn,$_POST['Chloride_Amount_S']);
				$chloride_unit = mysqli_real_escape_string($conn,$_POST['Chloride_Unit_S']);
				$chloride_dvalue = mysqli_real_escape_string($conn,$_POST['Chloride_DValue_S']);

				
				$query1 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount', '$energy_unit', '$energy_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query2 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 2, '$fat_amount', '$fat_unit', '$fat_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query3 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 3, '$saturated_fat_amount', '$saturated_fat_unit', '$saturated_fat_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query4 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 4, '$trans_fat_amount', '$trans_fat_unit', '$trans_fat_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query5 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 5, '$omega6_amount', '$omega6_unit', '$omega6_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query6 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 6, '$omega3_amount', '$omega3_unit', '$omega3_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query7 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 7, '$carbohydrates_amount', '$carbohydrates_unit', '$carbohydrates_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query8 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 8, '$fibre_amount', '$fibre_unit', '$fibre_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query9 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 9, '$soluble_fibre_amount', '$soluble_fibre_unit', '$soluble_fibre_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query10 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 10, '$insoluble_fibre_amount', '$insoluble_fibre_unit', '$insoluble_fibre_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query11="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 11, '$sugar_amount', '$sugar_unit', '$sugar_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query12="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 12, '$sugar_alcohols_amount', '$sugar_alcohols_unit', '$sugar_alcohols_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query13 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 13, '$starch_amount', '$starch_unit', '$starch_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query14 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 14, '$protein_amount', '$protein_unit', '$protein_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query15 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 15, '$cholesterol_amount', '$cholesterol_unit', '$cholesterol_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query16 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 16, '$sodium_amount', '$sodium_unit', '$sodium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
			
				$query17 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 17, '$potassium_amount', '$potassium_unit', '$potassium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query18 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 18, '$calcium_amount', '$calcium_unit', '$calcium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query19 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 19, '$iron_amount', '$iron_unit', '$iron_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				
				$query20 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 20, '$vitamina_amount', '$vitamina_unit', '$vitamina_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				
				
				$query21 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 21, '$vitaminc_amount', '$vitaminc_unit', '$vitaminc_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query22 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 22, '$vitamind_amount', '$vitamind_unit', '$vitamind_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query23 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 23, '$vitamine_amount', '$vitamine_unit', '$vitamine_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query24 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 24, '$vitamink_amount', '$vitamink_unit', '$vitaminB12_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query25 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 25, '$thiamine_amount', '$thiamine_unit', '$thiamine_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query26 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 26, '$riboflavin_amount', '$riboflavin_unit', '$riboflavin_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query27="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 27, '$niacin_amount', '$niacin_unit', '$niacin_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query28="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 28, '$vitaminB6_amount', '$vitaminB6_unit', '$vitaminB6_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query29="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 29, '$folate_amount', '$folate_unit', '$folate_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query30 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 30, '$vitaminB12_amount', '$vitaminB12_unit', '$vitaminB12_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query31 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 31, '$biotin_amount', '$biotin_unit', '$biotin_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query32 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 32, '$choline_amount', '$choline_unit', '$choline_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query33 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 33, '$pantothenate_amount', '$pantothenate_unit', '$pantothenate_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";

				$query34 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 34, '$phosphorus_amount', '$phosphorus_unit', '$phosphorus_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query35 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 35, '$iodide_Amount', '$iodide_unit', '$iodide_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query36 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 36, '$magnesium_amount', '$magnesium_unit', '$magnesium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query37 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 37, '$zinc_amount', '$zinc_unit', '$zinc_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query38 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 38, '$selenium_amount', '$selenium_unit', '$selenium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query39 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 39, '$copper_amount', '$copper_unit', '$copper_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query40 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 40, '$manganese_amount', '$manganese_unit', '$manganese_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
			
				$query41 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 41, '$chromium_amount', '$chromium_unit', '$chromium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";

	
				$query42 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 42, '$molybdenium_amount', '$molybdenium_unit', '$molybdenium_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";
				$query43 ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 43, '$chloride_amount', '$chloride_unit', '$chloride_dvalue', FALSE from $dbname.Package where ProductIDP = '$productID'";

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
				
echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";		
		
}		
$conn->close();
?>