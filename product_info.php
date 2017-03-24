<?php include 'connection.php';?>

<?php
$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');




$query =<<<EOQ
Select *   from $dbname.Product P
LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID
LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID
where P.ProductID = ?
EOQ;

$stmt = $conn->prepare($query);
$stmt->bind_param("i",$ProductID);
 $stmt->execute();
$result = $stmt->get_result();



if (!$result) {
    echo "ERRORS";
}

	$row = $result->fetch_assoc();



  


?>