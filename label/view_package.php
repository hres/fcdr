<?php include '../connection.php';?>

<?php

$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');



	$view_package =<<<EOQ
		SELECT * FROM Package
		WHERE ProductIDP = ?

EOQ;

							$stmt = $conn->prepare($view_package);
					     	$stmt->bind_param("i",$ProductID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();									
							
	
	
		


if (!$result1) {
    echo "ERRORS";
}
	 while($row = $result->fetch_assoc()) {
		 echo "<tr><td> <a href=/label/package_details.php?ProductID=$ProductID&PackageID=" .$row['PackageID'] . ">". $row['Label_UPC'] . "</a></td><td>" . $row['Label_Description'] . "</td><td>" . $row['Collection_Date'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Create_Date'] . "</td><td>" . $row['Last_Edit_Date'] . "</td><td>" . $row['Last_Edited_By'] . "</td></tr>";                       
		
	 }
	


$conn->close();
?>
