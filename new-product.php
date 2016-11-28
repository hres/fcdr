<?php include 'connection.php';?>
<?php


header("Content-type:text/html; charset=utf-8");



	if(isset($_POST['search'])) {
		
	
		
			$description = mysqli_real_escape_string($conn,$_POST['Description']);
			$brand = mysqli_real_escape_string($conn,$_POST['Brand']);
			$manufacturer = mysqli_real_escape_string($conn,$_POST['Manufacturer']);			
			$comments = mysqli_real_escape_string($conn,$_POST['Comments']);
			$cnf_code = mysqli_real_escape_string($conn,$_POST['CNF_CODE']);
			$classification_type = mysqli_real_escape_string($conn,$_POST['Classification_Type']);
			$classification_number = mysqli_real_escape_string($conn,$_POST['Classification_Number']);
			$cluster_number = mysqli_real_escape_string($conn,$_POST['Cluster_Number']);
	
	$flag = 0;
	
	if (strlen($classification_number) !=0){
	
		$query="INSERT INTO  $dbname.Product (Description, Brand, Manufacturer, Comments, CNF_CODE, Cluster_Number) VALUES ('$description','$brand', '$manufacturer', '$comments', '$cnf_code', '$cluster_number')";
		$result = mysqli_query($conn,$query);
		$id =  mysqli_insert_id($conn);
		//$query2 = "INSERT INTO  $dbname.Classification (Number, Classification_Name, _Type) VALUES ('$classificationid', '$classification_name', '$type')";		
		//$query1_ ="Insert into $dbname.Product_Component(PackageID, ComponentID, Amount, Amount_Unit_Of_Measure, Daily_Value, PPD) Select PackageID, 1, '$energy_amount_sold', '$energy_unit_sold', '$energy_dvalue_sold', TRUE from $dbname.Package where UPC12 = '$UPC12'";
		$query2 = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) Select ClassificationID , $id from $dbname.Classification where Classification_Number = $classification_number";
		
        $result2 = mysqli_query($conn,$query2); 

		//$query3 = "INSERT INTO  $dbname.Product_Classification (ProductID,ClassificationID) VALUES ($id, $id2)";
		//$result3 = mysqli_query($conn,$query3);
		$flag = 1;
		//echo $query3;	
	
		}	
		
		
		else{
		$query="INSERT INTO  $dbname.Product (Description, Brand, Manufacturer, Comments, CNF_CODE, Cluster_Number) VALUES ('$description','$brand', '$manufacturer', '$comments', '$cnf_code', '$cluster_number')";
		$result = mysqli_query($conn,$query); 
			$id =  mysqli_insert_id($conn);	
		}
	
mysqli_query('SET NAMES utf8');
mysqli_query('SET CHARACTER SET utf8');
	
	if($flag==0){
			if (!$result ) {
				echo "ERRORS 1";
	
				}else {
				
					echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$id';\",200);</script>";

					
					}

	
//echo "<script>setTimeout(\"location.href = 'edit_product.php?ProductID=$productID';\",200);</script>";
//header("Location: edit_product.php?ProductID=$productID");


}else{
	if (!$result  OR !$result2) { echo "ERRORS: ";}
   
	
		else {echo "Success... ";
			echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$id';\",200);</script>";

		
		
		}
		
		}

	
	//header("Location: edit_product.php?ProductID=$id ");

	
	
			

}

$conn->close();
?>
