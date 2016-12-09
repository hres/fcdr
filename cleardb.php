<?php include 'connection.php';?>
<?php
if (isset($_POST['clearbd'])) {
							$query1 =<<<EOQ
Delete from Product_Component  
EOQ;
$stmt = $conn->prepare($query);
$result_insert1 = $stmt->execute();

							$query2 =<<<EOQ
Delete from Sales  
EOQ;
$stmt = $conn->prepare($query2);
$result_insert2 = $stmt->execute();

							$query3 =<<<EOQ
Delete from Images  
EOQ;
$stmt = $conn->prepare($query3);

$result_insert4 = $stmt->execute();


							$query4 =<<<EOQ
Delete from Product_Classification  
EOQ;
$stmt = $conn->prepare($query4);

$result_insert3 = $stmt->execute();


							$query5 =<<<EOQ
Delete from Package  
EOQ;
$stmt = $conn->prepare($query5);
$result_insert5 = $stmt->execute();


							$query6 =<<<EOQ
Delete from Product  
EOQ;
$stmt = $conn->prepare($query6);
$result_insert5 = $stmt->execute();

}

$conn->close();
?>