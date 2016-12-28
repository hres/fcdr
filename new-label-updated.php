<?php include 'connection.php';?>

<?php

/*
						ADD THIS TO ALL CREATE/EDIT LABEL

						  array("44",'$Fat_PolyUnsaturated','g', '', TRUE),
						  array("44",'','', '', FALSE),
						  array("45",'$Fat_Monounsaturated_Per_Serving','g', '', TRUE),
						  array("45",'','', '', FALSE),

 */
 

$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['search'])) {
 	error_reporting(E_ALL);
ini_set('display_errors', 1);
		$Label_UPC = $_POST['Label_UPC'];

	$param = array(
			$productID,
			$_POST['Label_UPC'],
			$_POST['Label_Description'],
			$_POST['Ingredients'],
			$_POST['Common_Measure'],
			$_POST['PPD_Per_Serving_Amount'],
			$_POST['PPD_Per_Serving_UofM'],
			$_POST['Per_Serving_Amount'],
			$_POST['Per_Serving_Unit'],
			$_POST['Source'],
			$_POST['date1'],
			$_POST['Comments'],
			$_POST['Nutrition_Fact_Table'],
			$_POST['Other_Package_Statement'],
			$_POST['Nutrition_Claim'],
			$_POST['Suggested_Direction'],
			$_POST['Health_Claim'],
			$_POST['Nielsen_Category'],
			$_POST['Brand'],
			$_POST['Manufacturer'],
			$_POST['Country'],
			$_POST['Package_Size'],
			$_POST['Package_Size_UofM'],
			$_POST['Number_Of_Units'],
			$_POST['Storage_Type'],
			$_POST['Product_Description'],
			$_POST['Per_Serving_Amount_In_Grams'],
			$_POST['Per_Serving_Amount_In_Grams_PPD'],
			$_POST['Storage_Statement']

		);

			$stmtcheck = $conn->prepare("Select * FROM Package Label_UPC = ? AND ProductIDP <> ?");
			$stmtcheck->bind_param("si", $Label_UPC, $productID);
			$stmtcheck->execute();

			$stmtcheck->store_result();
						if (($stmtcheck->num_rows) > 0) {

								echo "Label UPC  already assigned to a different product ";


						}else{


				$query =<<<EOQ
INSERT INTO Package (
	ProductIDP,
	Label_UPC,
	Label_Description,
	Ingredients,
	Common_Measure,
	PPD_Per_Serving_Amount,
	PPD_Per_Serving_UofM,
	Per_Serving_Amount,
	Per_Serving_Unit,
	Source,
	Collection_Date,
	Comments,
	Nutrition_Fact_Table,
	Other_Package_Statement,
	Nutrition_Claim,
	Suggested_Direction,
	Health_Claim,
	Nielsen_Category,
	Brand,
	Manufacturer,
	Country,
	Package_Size,
	Package_Size_UofM,
	Number_Of_Units,
	Storage_Type,
	Product_Description,
	Per_Serving_Amount_In_Grams,
	Per_Serving_Amount_In_Grams_PPD,
	Storage_Statement
)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOQ;

							$stmt = $conn->prepare($query);
							$stmt->bind_param("issssdsdsssssssssssssssissdds", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28]);
							$result_insert = $stmt->execute();
							$last_id = mysqli_insert_id($conn);

			if(!$result_insert) echo "ERROR";



			$cars = array(
						  array(1,$_POST['Energy_Amount'],$_POST['Energy_Unit'], $_POST['Energy_DValue'], TRUE),
						  array(1,$_POST['Energy_Amount_S'],$_POST['Energy_Unit_S'], $_POST['Energy_DValue_S'], FALSE),

						  array(2,$_POST['Fat_Amount'],$_POST['Fat_Unit'], $_POST['Fat_DValue'], TRUE),
						  array(2,$_POST['Fat_Amount_S'],$_POST['Fat_Unit_S'],$_POST['Fat_DValue_S'], FALSE),

						  array(3,$_POST['Saturated_Fat_Amount'],$_POST['Saturated_Fat_Unit'], $_POST['Saturated_Fat_DValue'], TRUE),
						  array(3,$_POST['Saturated_Fat_Amount_S'],$_POST['Saturated_Fat_Unit_S'], $_POST['Saturated_Fat_DValue_S'], FALSE),


						  array(4,$_POST['Trans_Fat_Amount'],$_POST['Trans_Fat_Unit'], $_POST['Trans_Fat_DValue'], TRUE),
						  array(4,$_POST['Trans_Fat_Amount_S'],$_POST['Trans_Fat_Unit_S'],$_POST['Trans_Fat_DValue_S'], FALSE),


						  array(5,$_POST['Omega6_Amount'],$_POST['Omega6_Unit'], $_POST['Omega6_DValue'], TRUE),
						  array(5,$_POST['Omega6_Amount_S'],$_POST['Omega6_Unit_S'],$_POST['Omega6_DValue_S'], FALSE),

						  array(6,$_POST['Omega3_Amount'],$_POST['Omega3_Unit'], $_POST['Omega3_DValue'], TRUE),
						  array(6,$_POST['Omega3_Amount_S'],$_POST['Omega3_Unit_S'], $_POST['Omega3_DValue_S'], FALSE),


						 array(7,$_POST['Carbohydrates_Amount'],$_POST['Carbohydrates_Unit'], $_POST['Carbohydrates_DValue'], TRUE),
						  array(7,$_POST['Carbohydrates_Amount_S'],$_POST['Carbohydrates_Unit_S'],$_POST['Carbohydrates_DValue_S'], FALSE),

						  array(8,$_POST['Fibre_Amount'],$_POST['Fibre_Unit'],$_POST['Fibre_DValue'], TRUE),
						  array(8,$_POST['Fibre_Amount_S'],$_POST['Fibre_Unit_S'],$_POST['Fibre_DValue_S'], FALSE),


						 array(9,$_POST['Soluble_Fibre_Amount'],$_POST['Soluble_Fibre_Unit'], $_POST['Soluble_Fibre_DValue'], TRUE),
						  array(9,$_POST['Soluble_Fibre_Amount_S'],$_POST['Soluble_Fibre_Unit_S'], $_POST['Soluble_Fibre_DValue_S'], FALSE),

						  array(10,$_POST['Insoluble_Fibre_Amount'],$_POST['Insoluble_Fibre_Unit'], $_POST['Insoluble_Fibre_DValue'], TRUE),
						  array(10,$_POST['Insoluble_Fibre_Amount_S'],$_POST['Insoluble_Fibre_Unit_S'],$_POST['Insoluble_Fibre_DValue_S'], FALSE),

						  array(11,$_POST['Sugar_Amount'],$_POST['Sugar_Unit'], $_POST['Sugar_DValue'], TRUE),
						  array(11,$_POST['Sugar_Amount_S'],$_POST['Sugar_Unit_S'],$_POST['Sugar_DValue_S'], FALSE),


						  array(12,$_POST['Sugar_Alcohols_Amount'],$_POST['Sugar_Alcogols_Unit'], $_POST['Sugar_Alcohol_DValue'], TRUE),
						  array(12,$_POST['Sugar_Alcohols_Amount_S'],$_POST['Sugar_Alcogols_Unit_S'],$_POST['Sugar_Alcohol_DValue_S'], FALSE),

						  array(13,$_POST['Starch_Amount'],$_POST['Starch_Unit'], $_POST['Starch_DValue'], TRUE),
						  array(13,$_POST['Starch_Amount_S'],$_POST['Starch_Unit_S'],$_POST['Starch_DValue_S'], FALSE),

						  array(14,$_POST['Protein_Amount'],$_POST['Protein_Unit'], $_POST['Protein_DValue'], TRUE),
						  array(14,$_POST['Protein_Amount_S'],$_POST['Protein_Unit_S'], $_POST['Protein_DValue_S'], FALSE),
						  array(15,$_POST['Cholesterol_Amount'],$_POST['Cholesterol_Unit'],$_POST['Cholesterol_DValue'], TRUE),

						  array(15,$_POST['Cholesterol_Amount_S'],$_POST['Cholesterol_Unit_S'],$_POST['Cholesterol_DValue_S'], FALSE),

						  array(16,$_POST['Sodium_Amount'],$_POST['Sodium_Unit'], $_POST['Sodium_DValue'], TRUE),
						  array(16,$_POST['Sodium_Amount_S'],$_POST['Sodium_Unit_S'], $_POST['Sodium_DValue_S'], FALSE),

						  array(17,$_POST['Potassium_Amount'],$_POST['Potassium_Unit'], $_POST['Potassium_DValue'], TRUE),
						  array(17,$_POST['Potassium_Amount_S'],$_POST['Potassium_Unit_S'], $_POST['Potassium_DValue_S'], FALSE),

						  array(18,$_POST['Calcium_Amount'],$_POST['Calcium_Unit'], $_POST['Calcium_DValue'], TRUE),
						  array(18,$_POST['Calcium_Amount_S'],$_POST['Calcium_Unit_S'], $_POST['Calcium_DValue_S'], FALSE),

						  array(19,$_POST['Iron_Amount'],$_POST['Iron_Unit'],$_POST['Iron_DValue'], TRUE),
						  array(19,$_POST['Iron_Amount_S'],$_POST['Iron_Unit_S'],$_POST['Iron_DValue_S'], FALSE),

						  array(20,$_POST['VitaminA_Amount'],$_POST['VitaminA_Unit'], $_POST['VitaminA_DValue'], TRUE),
						  array(20,$_POST['VitaminA_Amount_S'],$_POST['VitaminA_Unit_S'], $_POST['VitaminA_DValue_S'], FALSE),
						  array(21,$_POST['VitaminC_Amount'],$_POST['VitaminC_Unit'], $_POST['VitaminC_DValue'], TRUE),
						  array(21,$_POST['VitaminC_Amount_S'],$_POST['VitaminC_Unit_S'],$_POST['VitaminC_DValue_S'], FALSE),
						  array(22,$_POST['VitaminD_Amount'],$_POST['VitaminD_Unit'], $_POST['VitaminD_DValue'], TRUE),
						  array(22,$_POST['VitaminD_Amount_S'],$_POST['VitaminD_Unit_S'],$_POST['VitaminD_DValue_S'], FALSE),


						  array(23,$_POST['VitaminE_Amount'],$_POST['VitaminE_Unit'], $_POST['VitaminE_DValue'], TRUE),
						  array(23,$_POST['VitaminE_Amount_S'],$_POST['VitaminE_Unit_S'],$_POST['VitaminE_DValue_S'], FALSE),

						  array(24,$_POST['VitaminK_Amount'],$_POST['VitaminK_Unit'], $_POST['VitaminK_DValue'], TRUE),
						  array(24,$_POST['VitaminK_Amount_S'],$_POST['VitaminK_Unit_S'],$_POST['VitaminK_DValue_S'], FALSE),

						 array(25,$_POST['Thiamine_Amount'],$_POST['Thiamine_Unit'],$_POST['Thiamine_DValue'], TRUE),
						  array(25,$_POST['Thiamine_Amount_S'],$_POST['Thiamine_Unit_S'],$_POST['Thiamine_DValue_S'], FALSE),

						  array(26,$_POST['Riboflavin_Amount'],$_POST['Riboflavin_Unit'],$_POST['Riboflavin_DValue'], TRUE),
						  array(26,$_POST['Riboflavin_Amount_S'],$_POST['Riboflavin_Unit_S'], $_POST['Riboflavin_DValue_S'], FALSE),

							array(27,$_POST['Niacin_Amount'],$_POST['Niacin_Unit'], $_POST['Niacin_DValue'], TRUE),
						  array(27,$_POST['Niacin_Amount_S'],$_POST['Niacin_Unit_S'],$_POST['Niacin_DValue_S'], FALSE),

						  array(28,$_POST['VitaminB6_Amount'],$_POST['VitaminB6_Unit'],$_POST['VitaminB6_DValue'], TRUE),
						  array(28,$_POST['VitaminB6_Amount_S'],$_POST['VitaminB6_Unit_S'],$_POST['VitaminB6_DValue_S'], FALSE),

						 array(29,$_POST['Folate_Amount'],$_POST['Folate_Unit'],$_POST['Folate_DValue'], TRUE),
						  array(29,$_POST['Folate_Amount_S'],$_POST['Folate_Unit_S'],$_POST['Folate_DValue_S'], FALSE),

						  array(30,$_POST['VitaminB12_Amount'],$_POST['VitaminB12_Unit'],$_POST['VitaminB12_DValue'], TRUE),
						  array(30,$_POST['VitaminB12_Amount_S'],$_POST['VitaminB12_Unit_S'],$_POST['VitaminB12_DValue_S'], FALSE),

						  array(31,$_POST['Biotin_Amount'],$_POST['Biotin_Unit'], $_POST['Biotin_DValue'], TRUE),
						  array(31,$_POST['Biotin_Amount_S'],$_POST['Biotin_Unit_S'],$_POST['Biotin_DValue_S'], FALSE),

						  array(32,$_POST['Choline_Amount'],$_POST['Choline_Unit'], $_POST['Choline_DValue'], TRUE),
						  array(32,$_POST['Choline_Amount_S'],$_POST['Choline_Unit_S'], $_POST['Choline_DValue_S'], FALSE),
						  array(33,$_POST['Pantothenate_Amount'],$_POST['Pantothenate_Unit'],$_POST['Pantothenate_DValue'], TRUE),
						  array(33,$_POST['Pantothenate_Amount_S'],$_POST['Pantothenate_Unit_S'],$_POST['Pantothenate_DValue_S'], FALSE),
						  array(34,$_POST['Phosphorus_Amount'],$_POST['Phosphorus_Unit'],$_POST['Phosphorus_DValue'], TRUE),
						  array(34,$_POST['Phosphorus_Amount_S'],$_POST['Phosphorus_Unit_S'],$_POST['Phosphorus_DValue_S'], FALSE),

						  array(35,$_POST['Iodide_Amount'],$_POST['Iodide_Unit'],$_POST['Iodide_DValue'], TRUE),
						  array(35,$_POST['Iodide_Amount_S'],$_POST['Iodide_Unit_S'],$_POST['Iodide_DValue_S'], FALSE),

						  array(36,$_POST['Magnesium_Amount'],$_POST['Magnesium_Unit'],$_POST['Magnesium_DValue'], TRUE),
						  array(36,$_POST['Magnesium_Amount_S'],$_POST['Magnesium_Unit_S'],$_POST['Magnesium_DValue_S'], FALSE),

						  array(37,$_POST['Zinc_Amount'],$_POST['Zinc_Unit'],$_POST['Zinc_DValue'], TRUE),
						  array(37,$_POST['Zinc_Amount_S'],$_POST['Zinc_Unit_S'],$_POST['Zinc_DValue_S'], FALSE),
						  array(38,$_POST['Selenium_Amount'],$_POST['Selenium_Unit'], $_POST['Selenium_DValue'], TRUE),
						  array(38,$_POST['Selenium_Amount_S'],$_POST['Selenium_Unit_S'],$_POST['Selenium_DValue_S'], FALSE),

						array(39,$_POST['Copper_Amount'],$_POST['Copper_Unit'],$_POST['Copper_DValue'], TRUE),
						  array(39,$_POST['Copper_Amount_S'],$_POST['Copper_Unit_S'], $_POST['Copper_DValue_S'], FALSE),
						 array(40,$_POST['Manganese_Amount'],$_POST['Manganese_Unit'],$_POST['Manganese_DValue'], TRUE),
						  array(40,$_POST['Manganese_Amount_S'],$_POST['Manganese_Unit_S'],$_POST['Manganese_DValue_S'], FALSE),

						  array(41,$_POST['Chromium_Amount'],$_POST['Chromium_Unit'], $_POST['Chromium_DValue'], TRUE),
						  array(41,$_POST['Chromium_Amount_S'],$_POST['Chromium_Unit_S'],$_POST['Chromium_DValue_S'], FALSE),

						  array(42,$_POST['Molybdenium_Amount'],$_POST['Molybdenium_Unit'], $_POST['Molybdenium_DValue'], TRUE),
						  array(42,$_POST['Molybdenium_Amount_S'],$_POST['Molybdenium_Unit_S'],$_POST['Molybdenium_DValue_S'], FALSE),

						 array(43,$_POST['Chloride_Amount'],$_POST['Chloride_Unit'], $_POST['Chloride_DValue'], TRUE),
						  array(43,$_POST['Chloride_Amount_S'],$_POST['Chloride_Unit_S'],$_POST['Chloride_DValue_S'], FALSE),

						array(46,$_POST['Saturated_Trans_Amount'],$_POST['Saturated_Trans_Unit'], $_POST['Saturated_Trans_DValue'], TRUE),
						  array(46,$_POST['Saturated_Trans_kj_Amount_S'],$_POST['Saturated_Trans_kj_Unit_S'],$_POST['Saturated_Trans_DValue_S'], FALSE),

						  array(47,$_POST['Energy_kj_Amount'],$_POST['Energy_kj_Unit'], $_POST['Engergy_kj_DValue'], TRUE),
						  array(47,$_POST['Energy_kj_Amount_S'],$_POST['Energy_kj_Unit_S'],$_POST['Energy_kj_DValue_S'], FALSE),


			);
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
for ($row = 0; $row < 90; $row++) {
								$stmt = $conn->prepare($query_insert);
								$stmt->bind_param("iidsds",$last_id, $cars[$row][0],$cars[$row][1],$cars[$row][2],$cars[$row][3],$cars[$row][4]);
								$results = $stmt->execute();

}



						}

//echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";


		}
			//echo "Success... ";
//echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";
$conn->close();
?>


 

