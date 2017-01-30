<?php include 'connection.php';?>

<?php



$packageID = ($_GET['PackageID']?$_GET['PackageID']:'');
$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['delete-label'])) {
			
			//$query = "Delete from $dbname.Product_Component where PackageID = $packageID"; 



$delete_images =<<<EOQ
		Delete from Images
		where LabelID = ?


EOQ;

							$stmt = $conn->prepare($delete_images);
					     	$stmt->bind_param("i",$packageID);
							$resultX = $stmt->execute();






$delete_component =<<<EOQ
		Delete from Product_Component
		where PackageID = ?


EOQ;

							$stmt = $conn->prepare($delete_component);
					     	$stmt->bind_param("i",$packageID);
							$result = $stmt->execute();

if($result){
$delete_package =<<<EOQ
		Delete from Package
		where PackageID = ?


EOQ;

							$stmt_label = $conn->prepare($delete_package);
					     	$stmt_label->bind_param("i",$packageID);
							$result2 = $stmt_label->execute();



		if (!$result or !$result2 ) {
    echo "failed to delete the Package Label";

}else{
	echo "<h3>Package was successfully deleted, redirecting to the product page...</h3>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$ProductID';\",3000);</script>";

	
}

		}else{
				echo "<h3>Failed to delete the package label...</h3>";

		}	
		}
$conn->close();
?>
