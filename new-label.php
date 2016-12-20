<?php include 'connection.php';?>

<?php

header("Content-type:text/html; charset: iso-8859-1");


//$servername = "127.0.0.1";
//$username = "rnelson";
//$password = "romario";
//$dbname = "FCDR";
//$conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//}

$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['search'])) {
/* 			$upc12 = mysqli_real_escape_string($conn,$_POST['UPC12']);
			$des = mysqli_real_escape_string($conn,$_POST['Description']);
			$source = mysqli_real_escape_string($conn,$_POST['Sources']);
			
			$ingredients = mysqli_real_escape_string($conn,$_POST['Ingredients']);
			$date1 = mysqli_real_escape_string($conn,$_POST['date1']);
			
			$health_claim = mysqli_real_escape_string($conn,$_POST['Health_Claim']);
			$suggested_direction = mysqli_real_escape_string($conn,$_POST['Suggested_Direction']);
			$nutrition_claim = mysqli_real_escape_string($conn,$_POST['Nutrition_Claim']);
			$nutrition_fact_table = mysqli_real_escape_string($conn,$_POST['Nutrition_Fact_Table']);
			$per_serving_amount = mysqli_real_escape_string($conn,$_POST['Per_Serving_Amount']);
			$per_serving_unit = mysqli_real_escape_string($conn,$_POST['Per_Serving_Unit']);
			$ppd_Per_Serving_Amount = mysqli_real_escape_string($conn,$_POST['PPD_Per_Serving_Amount']);
			$ppd_Per_Serving_uofm = mysqli_real_escape_string($conn,$_POST['PPD_Per_Serving_UofM']);
			$common_measure = mysqli_real_escape_string($conn,$_POST['Common_Measure']);
			$other_package_statement = mysqli_real_escape_string($conn,$_POST['Other_Package_Statement']); */
			
			$Label_UPC = mysqli_real_escape_string($conn,$_POST['Label_UPC']);
			$Label_Description = mysqli_real_escape_string($conn,$_POST['Label_Description']);
			$Ingredients = mysqli_real_escape_string($conn,$_POST['Ingredients']);			
			$Common_Measure = mysqli_real_escape_string($conn,$_POST['Common_Measure']);
			$PPD_Per_Serving_Amount = mysqli_real_escape_string($conn,$_POST['PPD_Per_Serving_Amount']);
			$PPD_Per_Serving_UofM = mysqli_real_escape_string($conn,$_POST['PPD_Per_Serving_UofM']);
			$Per_Serving_Amount = mysqli_real_escape_string($conn,$_POST['Per_Serving_Amount']);
			$Per_Serving_Unit = mysqli_real_escape_string($conn,$_POST['Per_Serving_Unit']);				

			$Source = mysqli_real_escape_string($conn,$_POST['Source']);
			$Collection_Date = mysqli_real_escape_string($conn,$_POST['date1']);
			$Comments = mysqli_real_escape_string($conn,$_POST['Comments']);
			$Nutrition_Fact_Table = mysqli_real_escape_string($conn,$_POST['Nutrition_Fact_Table']);
			$other_package_statement = mysqli_real_escape_string($conn,$_POST['Other_Package_Statement']);
			$Nutrition_Claim = mysqli_real_escape_string($conn,$_POST['Nutrition_Claim']);
			$Suggested_Direction = mysqli_real_escape_string($conn,$_POST['Suggested_Direction']);
			$Health_Claim = mysqli_real_escape_string($conn,$_POST['Health_Claim']);
			
			$Nielsen_Category = mysqli_real_escape_string($conn,$_POST['Nielsen_Category']);
			$Brand = mysqli_real_escape_string($conn,$_POST['Brand']);
			$Manufacturer = mysqli_real_escape_string($conn,$_POST['Manufacturer']);
			$Country = mysqli_real_escape_string($conn,$_POST['Country']);
			$Package_Size = mysqli_real_escape_string($conn,$_POST['Package_Size']);
			$Package_Size_UofM = mysqli_real_escape_string($conn,$_POST['Package_Size_UofM']);
			$Number_Of_Units = mysqli_real_escape_string($conn,$_POST['Number_Of_Units']);
			$Storage_Type = mysqli_real_escape_string($conn,$_POST['Storage_Type']);
			$Product_Description = mysqli_real_escape_string($conn,$_POST['Product_Description']);
			
			$Per_Serving_Amount_In_Grams = mysqli_real_escape_string($conn,$_POST['Per_Serving_Amount_In_Grams']);
			$Per_Serving_Amount_In_Grams_PPD = mysqli_real_escape_string($conn,$_POST['Per_Serving_Amount_In_Grams_PPD']);
			$Storage_Statement = mysqli_real_escape_string($conn,$_POST['Storage_Statement']);		
			
			
			
			$query2 = "Select * from $dbname.Package where UPC12 = $upc12 AND ProductIDP <> '$productID'"; 
			$result2 = mysqli_query($conn,$query2);
			
			$rowcount=mysqli_num_rows($result2);
			if($rowcount>0){
				echo "UPC12 Code already belongs to a different product ";
				
				
			}else{
			
			
	/* 		$query="INSERT INTO  $dbname.Package (PackageID, ProductIDP, UPC12, Sources, Description, Ingredients, Collection_Date, Health_Claim, Suggested_Direction, Nutrition_Claim, Nutrition_Fact_Table, Per_Serving_Amount, Per_Serving_Unit, PPD_Per_Serving_Amount, PPD_Per_Serving_UofM, Common_Measure, Other_Package_Statement)
			VALUES (NULL,'$productID','$upc12','$source', '$des', '$ingredients', '$date1', '$health_claim', '$suggested_direction', '$nutrition_claim', '$nutrition_fact_table', '$per_serving_amount', '$per_serving_unit', '$ppd_Per_Serving_Amount', '$ppd_Per_Serving_uofm', '$common_measure', '$other_package_statement')";	
			 */
			$query ="INSERT INTO  $dbname.Package (PackageID, ProductIDP,Label_UPC, Label_Description,Ingredients, Common_Measure, PPD_Per_Serving_Amount, 
					PPD_Per_Serving_UofM, Per_Serving_Amount, Per_Serving_Unit, Source, Collection_Date, Comments, Nutrition_Fact_Table, Suggested_Direction, 
					Health_Claim, Nielsen_Category, Brand, Manufacturer, Country, Package_Size, Package_Size_UofM, Number_Of_Units, Storage_Type, Product_Description,
					Per_Serving_Amount_In_Grams, Per_Serving_Amount_In_Grams_PPD) VALUES (NULL, '$productID', '$Label_UPC', '$Label_Description','$Ingredients', '$Common_Measure', '$PPD_Per_Serving_Amount', 
					'$PPD_Per_Serving_UofM', '$Per_Serving_Amount', '$Per_Serving_Unit', '$Source', '$Collection_Date', '$Comments', '$Nutrition_Fact_Table', '$Suggested_Direction', 
					'$Health_Claim', '$Nielsen_Category', '$Brand', '$Manufacturer', '$Country', '$Package_Size', '$Package_Size_UofM', '$Number_Of_Units', '$Storage_Type', '$Product_Description',
					'$Per_Serving_Amount_In_Grams', '$Per_Serving_Amount_In_Grams_PPD')";
			
			$result = mysqli_query($conn,$query);
			
		mysqli_query('SET NAMES utf8');
		mysqli_query('SET CHARACTER SET utf8');
	
	
if (!$result ) {
    echo "ERRORS";
	
}else {

	//echo "Success... ";
//echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";
//header("Location: edit_product.php?ProductID=$productID");
}

		}
		
		}
$conn->close();
?>
