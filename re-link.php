<?php include 'connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');
$oldProductID = ($_GET['OldProductID']?$_GET['OldProductID']:'');
$newProductID = ($_GET['NewProductID']?$_GET['NewProductID']:'');



	$relink =<<<EOQ
		Update Package
		SET ProductIDP = ?
		WHERE PackageID = ?

EOQ;

							$stmt = $conn->prepare($relink);
					     	$stmt->bind_param("ii",$newProductID,$PackageID);
							$result = $stmt->execute();	
																	
							
	
	
						
														

if (!$result) {
    echo "ERRORS";
}else{
	//header( "refresh:10; url=home.php" );
		echo "<h3><strong>Package Label was successfully re-linked, redirecting to the previous page...</strong><h3>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$oldProductID';\",3000);</script>";

	
}
	

$conn->close();
?>
