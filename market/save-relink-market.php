<?php include '../connection.php';?>

<?php

$SalesID = ($_GET['SalesID']?$_GET['SalesID']:'');
$oldProductID = ($_GET['OldProductID']?$_GET['OldProductID']:'');
$newProductID = ($_GET['NewProductID']?$_GET['NewProductID']:'');


	$query = "Update $dbname.Sales SET ProductIDS = '$newProductID' where SalesID = '$SalesID'";
	$result = mysqli_query($conn,$query);



		$relink =<<<EOQ
		Update Sales
		SET ProductIDS = ?
		WHERE SalesID = ?

EOQ;

							$stmt = $conn->prepare($relink);
					     	$stmt->bind_param("ii",$newProductID,$SalesID);
							$result = $stmt->execute();	
																	
							
	
	
						
														

if (!$result) {
    //echo "ERRORS";
}else{
	//header( "refresh:10; url=home.php" );
	echo "<h3><strong>Market Share was successfully re-linked, redirecting to the previous page...</strong><h3>";
		echo "<script>setTimeout(\"location.href = '/product/view_product.php?ProductID=$oldProductID';\",3000);</script>";

	
}
	

$conn->close();
?>