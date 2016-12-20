<?php include 'connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');
$oldProductID = ($_GET['OldProductID']?$_GET['OldProductID']:'');
$newProductID = ($_GET['NewProductID']?$_GET['NewProductID']:'');


	$query = "Update $dbname.Package SET ProductIDP = '$newProductID' where PackageID = '$PackageID'";
	$result = mysqli_query($conn,$query);
						
														

if (!$result) {
    echo "ERRORS";
}else{
	//header( "refresh:10; url=home.php" );
		echo "<h3><strong>Package Label was successfully re-linked, redirecting to the previous page...</strong><h3>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$oldProductID';\",3000);</script>";

	
}
	

$conn->close();
?>
