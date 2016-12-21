<?php include 'connection.php';?>
<?php
if (isset($_POST['clearbd'])) {
							
	$query1 =  "Delete from Product_Component where ComponentID > 0"; 
	$result = mysqli_query($conn,$query1);	
	$query2 =  "Delete from Sales where SalesID > 0"; 	
	$result = mysqli_query($conn,$query2);	
	
							
}

$conn->close();
?>