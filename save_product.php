<?php include 'connection.php';?>

<?php



$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');


$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['search'])) {
			$description = mysqli_real_escape_string($conn,$_POST['Description']);
			$brand = mysqli_real_escape_string($conn,$_POST['Brand']);
			$manufacturer = mysqli_real_escape_string($conn,$_POST['Manufacturer']);
			
			$comments = mysqli_real_escape_string($conn,$_POST['Comments']);
			$cnf_code = mysqli_real_escape_string($conn,$_POST['CNF_CODE']);
			$classification_name = mysqli_real_escape_string($conn,$_POST['Classification_Name']);
			$classification_type = mysqli_real_escape_string($conn,$_POST['Classification_Type']);
			$classification_number = mysqli_real_escape_string($conn,$_POST['Classification_Number']);
			$cluster_number = mysqli_real_escape_string($conn,$_POST['Cluster_Number']);
			
$query="UPDATE  $dbname.Product SET Description='$description', Cluster_Number='$cluster_number', Brand='$brand',Manufacturer='$manufacturer',Comments='$comments',CNF_CODE='$cnf_code' WHERE ProductID='$productID'";
	$result = mysqli_query($conn,$query);

		mysqli_query('SET NAMES utf8');
mysqli_query('SET CHARACTER SET utf8');
	if($result){
		
		
		$classification_check = "Select * From $dbname.Classification Where Classification_Number= $classification_number";
			$classification_check_result = mysqli_query($conn,$classification_check);
			$classification_check_count = mysqli_num_rows($classification_check_result);
				if($classification_check_count>0){
						
		$classification_check1 = "Select * From $dbname.Product_Classification Where ProductID =$productID";
			$classification_check_result1 = mysqli_query($conn,$classification_check1);
			$classification_check_count1 = mysqli_num_rows($classification_check_result1);						
							if($classification_check_count1>0){
							
							$query2 = "UPDATE $dbname.Product_Classification SET ClassificationID=(Select ClassificationID From $dbname.Classification where Classification_Number = $classification_number) Where ProductID = '$productID'";
							$result2 = mysqli_query($conn,$query2);
							if(!$result2){
	
	   echo "Invalid classification number";
}
							
					}else{
						
						echo "here too";
					$queryCC = "INSERT INTO $dbname.Product_Classification (ClassificationID, ProductID) Select ClassificationID , $productID from $dbname.Classification where Classification_Number= $classification_number";		
					$resultCC = mysqli_query($conn,$queryCC);
					if(!$resultCC){
	
				echo "Invalid classification number CCC";

}
						
					}
				}
		


	}
	
if (!$result) {

	
	
} 
else{

	
echo "<script>setTimeout(\"location.href = 'edit_product.php?ProductID=$productID';\",100);</script>";

}

}
$conn->close();
?>
