<?php include '../connection.php';?>

<?php
$packageID = ($_GET['PackageID']?$_GET['PackageID']:'');
	

	$fill_package =<<<EOQ
		Select * from Package P 
		where P.PackageID = ?


EOQ;

							$stmt = $conn->prepare($fill_package);
					     	$stmt->bind_param("i",$packageID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
				




if (!$result1) {
    echo "ERRORS";
}
	
	$row = $result->fetch_assoc();

	


$conn->close();
?>
