<?php include 'connection.php';?>

<?php


$UPC12 = ($_GET['PackageID']?$_GET['PackageID']:'');



		if(isset($_POST['search'])) {
			
			
				$energy_amount = mysqli_real_escape_string($conn,$_POST['Energy_Amount']);
				$energy_unit = mysqli_real_escape_string($conn,$_POST['Energy_Unit']);
				$energy_dvalue = mysqli_real_escape_string($conn,$_POST['Energy_DValue']);
				
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
				
				$molybdenium_amount = mysqli_real_escape_string($conn,$_POST['Molybdenium_Amount']);
				$molybdenium_unit = mysqli_real_escape_string($conn,$_POST['Molybdenium_Unit']);
				$molybdenium_dvalue = mysqli_real_escape_string($conn,$_POST['Molybdenium_DValue']);
				
				$chloride_amount = mysqli_real_escape_string($conn,$_POST['Chloride_Amount']);
				$chloride_unit = mysqli_real_escape_string($conn,$_POST['Chloride_Unit']);
				$chloride_dvalue = mysqli_real_escape_string($conn,$_POST['Chloride_DValue']);
	
			$query1 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$energy_amount', PC.Amount_Unit_Of_Measure = '$energy_unit', PC.Daily_Value = '$energy_dvalue' where  C.Component_Name = 'Energy' and   PC.PackageID=(select PackageID From $dbname.Package where UPC12='$UPC12') AND PPD = 1";
			$query2 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$fat_amount', PC.Amount_Unit_Of_Measure = '$fat_unit', PC.Daily_Value = '$fat_dvalue', where  C.Component_Name = 'Fat' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query3 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$saturated_fat_amount', PC.Amount_Unit_Of_Measure = '$saturated_fat_unit', PC.Daily_Value = '$saturated_fat_dvalue', where  C.Component_Name = 'Saturated Fat' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query4 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$trans_fat_amount', PC.Amount_Unit_Of_Measure = '$trans_fat_unit', PC.Daily_Value = '$trans_fat_dvalue', where  C.Component_Name = 'Trans Fat' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query5 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$omega6_amount', PC.Amount_Unit_Of_Measure = '$omega6_unit', PC.Daily_Value = '$omega6_dvalue', where  C.Component_Name = 'Omega-6 Polyunsaturated Fat' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query6 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$omega3_amount', PC.Amount_Unit_Of_Measure = '$omega3_unit', PC.Daily_Value = '$omega3_dvalue', where  C.Component_Name = 'Omega-3 Polyunsaturated Fat' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query7 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$carbohydrates_amount', PC.Amount_Unit_Of_Measure = '$carbohydrates_unit', PC.Daily_Value = '$carbohydrates_dvalue', where  C.Component_Name = 'Carbohydrates' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query8 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$fibre_amount', PC.Amount_Unit_Of_Measure = '$fibre_unit', PC.Daily_Value = '$fibre_dvalue', where  C.Component_Name = 'Fibre' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query9 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$soluble_fibre_amount', PC.Amount_Unit_Of_Measure = '$soluble_fibre_unit', PC.Daily_Value = '$soluble_fibre_dvalue', where  C.Component_Name = 'Soluble Fibre' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query10 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$insoluble_fibre_amount', PC.Amount_Unit_Of_Measure = '$insoluble_fibre_unit', PC.Daily_Value = '$insoluble_fibre_dvalue', where  C.Component_Name = 'Insoluble Fibre' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query11 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$sugar_amount', PC.Amount_Unit_Of_Measure = '$sugar_unit', PC.Daily_Value = '$sugar_dvalue', where  C.Component_Name = 'Sugars' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query12 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$sugar_alcohols_amount', PC.Amount_Unit_Of_Measure = '$sugar_alcohols_unit', PC.Daily_Value = '$sugar_alcohols_unit', where  C.Component_Name = 'Sugars Alcohol' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query13 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$starch_amount', PC.Amount_Unit_Of_Measure = '$starch_unit', PC.Daily_Value = '$starch_unit', where  C.Component_Name = 'Starch' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query14 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$protein_amount', PC.Amount_Unit_Of_Measure = '$protein_unit', PC.Daily_Value = '$protein_dvalue', where  C.Component_Name = 'Protein' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query15 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$cholesterol_amount', PC.Amount_Unit_Of_Measure = '$cholesterol_unit', PC.Daily_Value = '$cholesterol_dvalue', where  C.Component_Name = 'Cholesterol' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query16 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$sodium_amount', PC.Amount_Unit_Of_Measure = '$sodium_unit', PC.Daily_Value = '$sodium_dvalue', where  C.Component_Name = 'Sodium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query17 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$potassium_amount', PC.Amount_Unit_Of_Measure = '$potassium_unit', PC.Daily_Value = '$potassium_dvalue', where  C.Component_Name = 'Potassium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query18 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$calcium_amount', PC.Amount_Unit_Of_Measure = '$calcium_unit', PC.Daily_Value = '$calcium_dvalue', where  C.Component_Name = 'Calcium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query19 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$iron_amount', PC.Amount_Unit_Of_Measure = '$iron_unit', PC.Daily_Value = '$iron_dvalue', where  C.Component_Name = 'Iron' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query20 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitaminc_amount', PC.Amount_Unit_Of_Measure = '$vitaminc_unit', PC.Daily_Value = '$vitaminc_dvalue', where  C.Component_Name = 'Vitamin C' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query21 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamind_amount', PC.Amount_Unit_Of_Measure = '$vitamind_unit', PC.Daily_Value = '$vitamind_dvalue', where  C.Component_Name = 'Vitamin D' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query22 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamine_amount', PC.Amount_Unit_Of_Measure = '$vitamine_unit', PC.Daily_Value = '$vitamind_dvalue', where  C.Component_Name = 'Vitamin E' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query23 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitamink_amount', PC.Amount_Unit_Of_Measure = '$vitamink_unit', PC.Daily_Value = '$vitamink_dvalue', where  C.Component_Name = 'Vitamin K' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query24 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$thiamine_amount', PC.Amount_Unit_Of_Measure = '$thiamine_unit', PC.Daily_Value = '$thiamine_dvalue', where  C.Component_Name = 'Thiamine' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query25 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$riboflavin_amount', PC.Amount_Unit_Of_Measure = '$riboflavin_unit', PC.Daily_Value = '$riboflavin_dvalue', where  C.Component_Name = 'Riboflavin' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query26 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$niacin_amount', PC.Amount_Unit_Of_Measure = '$niacin_unit', PC.Daily_Value = '$niacin_dvalue', where  C.Component_Name = 'Niacin' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query27 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitaminB6_amount', PC.Amount_Unit_Of_Measure = '$vitaminB6_unit', PC.Daily_Value = '$vitaminB6_dvalue', where  C.Component_Name = 'Vitamin B6' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query28 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$vitaminB12_amount', PC.Amount_Unit_Of_Measure = '$vitaminB12_unit', PC.Daily_Value = '$vitaminB12_dvalue', where  C.Component_Name = 'Vitamin B12' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query29 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$folate_amount', PC.Amount_Unit_Of_Measure = '$folate_unit', PC.Daily_Value = '$folate_dvalue', where  C.Component_Name = 'Folate' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query30 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$biotin_amount', PC.Amount_Unit_Of_Measure = '$biotin_unit', PC.Daily_Value = '$biotin_dvalue', where  C.Component_Name = 'Biotin' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query31 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$choline_amount', PC.Amount_Unit_Of_Measure = '$choline_unit', PC.Daily_Value = '$choline_dvalue', where  C.Component_Name = 'Choline' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query32 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$pantothenate_amount', PC.Amount_Unit_Of_Measure = '$pantothenate_unit', PC.Daily_Value = '$pantothenate_dvalue', where  C.Component_Name = 'Pantothenate' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query33 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$phosphorus_amount', PC.Amount_Unit_Of_Measure = '$phosphorus_unit', PC.Daily_Value = '$phosphorus_dvalue', where  C.Component_Name = 'Phosphorus' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query34 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$iodide_amount', PC.Amount_Unit_Of_Measure = '$iodide_unit', PC.Daily_Value = '$iodide_dvalue', where  C.Component_Name = 'Iodide' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query35 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$magnesium_amount', PC.Amount_Unit_Of_Measure = '$magnesium_unit', PC.Daily_Value = '$magnesium_dvalue', where  C.Component_Name = 'Magnesium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query36 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$zinc_amount', PC.Amount_Unit_Of_Measure = '$zinc_unit', PC.Daily_Value = '$zinc_dvalue', where  C.Component_Name = 'Zinc' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query37 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$selenium_amount', PC.Amount_Unit_Of_Measure = '$selenium_unit', PC.Daily_Value = '$selenium_dvalue', where  C.Component_Name = 'Magnesium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query38 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$copper_amount', PC.Amount_Unit_Of_Measure = '$copper_unit', PC.Daily_Value = '$copper_dvalue', where  C.Component_Name = 'Copper' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query39 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$manganese_amount', PC.Amount_Unit_Of_Measure = '$manganese_unit', PC.Daily_Value = '$manganese_dvalue', where  C.Component_Name = 'Manganese' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query40 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$molybdenium_amount', PC.Amount_Unit_Of_Measure = '$molybdenium_unit', PC.Daily_Value = '$molybdenium_unit', where  C.Component_Name = 'Magnesium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";
			$query41 = "Update $dbname.Package AS P INNER JOIN $dbname.Product_Component AS PC ON P.PackageID=PC.PackageID INNER JOIN $dbname.Components AS C On  PC.ComponentID = C.ComponentID SET PC.Amount= '$chloride_amount', PC.Amount_Unit_Of_Measure = '$chloride_unit', PC.Daily_Value = '$chloride_dvalue', where  C.Component_Name = 'Magnesium' and   PC.PackageID=(select PackageID From Package where UPC12='$UPC12') AND PPD = 1";

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
				
	
if (!$result1) {
    echo "ERRORS";
	
}else {

	echo "Success... ";
echo "<script>setTimeout(\"location.href = 'edit_package.php?PackageID=$packageID';\",200);</script>";

}

}
$conn->close();
?>
