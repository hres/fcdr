<?php include 'connection.php';?>

<?php


$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');


		if(isset($_POST['delete-market-share'])) {
			
			$query = "Delete from $dbname.Sales where SalesID = $salesID"; 
			$result = mysqli_query($conn,$query);
			if (!$result ) {
    echo "failed to delete the Market Share";

}else{
	echo "Market Share was successfully deleted, redirecting to the home page...";
	echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

	
}

		
		}
$conn->close();
?>
