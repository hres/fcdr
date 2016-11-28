<?php include 'connection.php';?>

<?php

$PID = ($_GET['SalesID']?$_GET['SalesID']:'');


	$query = "  SELECT * FROM $dbname.Sales P where P.SalesID = $PID";
	$result = mysqli_query($conn,$query);
						
							
							

if (!$result) {
    echo "ERRORS";
}
	
	$row = $result->fetch_assoc();

	


$conn->close();
?>