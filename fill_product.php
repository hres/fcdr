<?php include 'connection.php';?>

<?php

$PID = ($_GET['ProductID']?$_GET['ProductID']:'');



	$fill_product=<<<EOQ
		Select * Product P LEFT JOIN Product_Classification PC
		ON P.ProductID = PC.ProductID LEFT JOIN Classification
		C ON PC.ClassificationID = C.ClassificationID  where P.ProductID = ?


EOQ;

							$stmt = $conn->prepare($fill_product);
					     	$stmt->bind_param("i",$PID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
						
							

if (!$result1) {
    echo "ERRORS";
}
	
	$row = $result->fetch_assoc();

	


$conn->close();
?>