<?php include 'connection.php';?>

<?php

$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');


	
	$query = "  SELECT * FROM Package where ProductIDP = $ProductID";
	$result = mysqli_query($conn,$query);


if (!$result) {
    echo "ERRORS";
}
	 while($row = $result->fetch_assoc()) {
		 echo "<tr><td> <a href=package_details.php?ProductID=$ProductID&PackageID=" .$row['PackageID'] . ">". $row['Label_UPC'] . "</a></td><td>" . $row['Label_Description'] . "</td><td>" . $row['Collection_Date'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Create_Date'] . "</td><td>" . $row['Last_Edit_Date'] . "</td><td>" . $row['Last_Edited_By'] . "</td></tr>";                       
		
	 }
	


$conn->close();
?>