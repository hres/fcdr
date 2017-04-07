<?php include 'connection.php';?>

<?php


$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');
$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');

		if(isset($_POST['delete-market-share']) && $_SERVER["REQUEST_METHOD"] == "POST") {
			


$delete_sales =<<<EOQ
		Delete from Sales
		where SalesID = ?


EOQ;

							$stmt = $conn->prepare($delete_sales);
					     	$stmt->bind_param("i",$salesID);
							$result = $stmt->execute();


			if (!$result ) {
    echo "failed to delete the Market Share";

}else{
	echo "<h3>Market Share was successfully deleted, redirecting to product page...</h3>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$ProductID';\",3000);</script>";

	
}

		
		}
$conn->close();
?>
