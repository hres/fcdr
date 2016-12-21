<?php include 'connection.php';?>
<?php
if (isset($_POST['clearbd'])) {
							

	$query2 =  "Delete from $dbname.Sales where SalesID > 0"; 	
	$result = mysqli_query($conn,$query2);	
	

							
}

$conn->close();
?>