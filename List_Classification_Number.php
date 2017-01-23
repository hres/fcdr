<?php include 'connection.php';?>

<?php


	
$query = "Select Distinct Classification_Number from $dbname.Classification ORDER BY CAST(Classification_Number as UNSIGNED) ASC";
	$result = mysqli_query($conn,$query);


if (!$result) {
    echo "ERRORS";
}

	while($row = $result->fetch_assoc()){
		echo " <option value=" . $row['Classification_Number'] .">". $row['Classification_Number'] ."</option>";
		
		
	}

$conn->close();

  


?>