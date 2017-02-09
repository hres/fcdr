<?php include '../connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');

	
	//$query = "  SELECT * FROM Package P where P.PackageID = $PackageID";
	
	$fill_package_1 =<<<EOQ
		Select * from Package P 
		where P.PackageID = ?


EOQ;

							$stmt = $conn->prepare($fill_package_1);
					     	$stmt->bind_param("i",$PackageID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
		
	
if (!$result) {
    echo "ERRORS";
}

	$row = $result->fetch_assoc();
/* 		 echo "<tr><td>". $row['Label_UPC'] . "</td><td>". $row['Label_Description'] . "</td><td>". $row['Common_Measure'] . "</td><td>". $row['Nielsen_Category'] . "</td></tr>";                       
		 echo "<tr><td>". $row[''] . "</td><td>". $row['Label_Description'] . "</td><td>". $row['Common_Measure'] . "</td><td>". $row['Nielsen_Category'] . "</td></tr>";                       

 */


  


?>
