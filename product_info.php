<?php include 'connection.php';?>

<?php
$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');




	
$query = "Select *   from $dbname.Product P LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID   where P.ProductID = '$ProductID';
";
	$result = mysqli_query($conn,$query);


if (!$result) {
    echo "ERRORS";
}

	$row = $result->fetch_assoc();



  


?>