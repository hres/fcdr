<?php include 'connection.php';?>

<?php



$packageID = ($_GET['PackageID']?$_GET['PackageID']:'');
$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['delete-label'])) {
			
			$query = "Delete from $dbname.Product_Component where PackageID = $packageID"; 
			$result = mysqli_query($conn,$query);
			$query2 = "Delete from $dbname.Package where PackageID = $packageID";
			$result2 = mysqli_query($conn,$query2);
		if (!$result or !result2 ) {
    echo "failed to delete the Package Label";

}else{
	echo "<h1>Package was successfully deleted, redirecting to the product page...</h1>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$ProductID';\",3000);</script>";

	
}

		
		}
$conn->close();
?>
