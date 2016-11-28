<?php include 'connection.php';?>

<?php



$packageID = ($_GET['PackageID']?$_GET['PackageID']:'');


		if(isset($_POST['delete-label'])) {
			
			$query = "Delete from $dbname.Product_Component where PackageID = $packageID"; 
			$result = mysqli_query($conn,$query);
			$query2 = "Delete from $dbname.Package where PackageID = $packageID";
			$result2 = mysqli_query($conn,$query2);
		if (!$result or !result2 ) {
    echo "failed to delete the Package Label";

}else{
	echo "Package was successfully deleted, redirecting to the home page...";
		echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

	
}

		
		}
$conn->close();
?>
