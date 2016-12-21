<?php include 'connection.php';?>

<?php


$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');
$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');

		if(isset($_POST['delete-market-share'])) {
			
			$query = "Delete from $dbname.Sales where SalesID = $salesID"; 
			$result = mysqli_query($conn,$query);
			if (!$result ) {
    echo "failed to delete the Market Share";

}else{
	echo "<h3>Market Share was successfully deleted, redirecting to product page...</h3>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$ProductID';\",3000);</script>";

	
}

		
		}
$conn->close();
?>
