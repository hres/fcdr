<?php include 'connection.php';?>

<?php

$PID = ($_GET['SalesID']?$_GET['SalesID']:'');


	//$query = "  SELECT * FROM $dbname.Sales P where P.SalesID = $PID";
	//$result = mysqli_query($conn,$query);

	$fill_sales =<<<EOQ
		Select * from Sales
		where SalesID = ?


EOQ;

							$stmt = $conn->prepare($fill_sales);
					     	$stmt->bind_param("i",$PID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
							

if (!$result1) {
    echo "ERRORS";
}
	
	$row = $result->fetch_assoc();

	


$conn->close();
?>