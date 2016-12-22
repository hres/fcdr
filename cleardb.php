<?php include 'connection.php';?>
<?php

							

	$query2 =  "Delete from $dbname.Sales where SalesID > 0"; 	
	$result = mysqli_query($conn,$query2);	
	echo "here";

							


$conn->close();
?>