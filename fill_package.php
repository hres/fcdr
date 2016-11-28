<?php include 'connection.php';?>

<?php
$packageID = ($_GET['PackageID']?$_GET['PackageID']:'');
	
	
	$query = "  SELECT * FROM $dbname.Package P WHERE P.PackageID = $packageID";
	$result = mysqli_query($conn,$query);
							
							

if (!$result) {
    echo "ERRORS";
}
	
	$row = $result->fetch_assoc();

	


$conn->close();
?>