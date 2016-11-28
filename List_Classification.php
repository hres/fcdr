<?php include 'connection.php';?>

<?php

	
$query = "Select Distinct Classification_Name   from $dbname.Classification ORDER BY Classification_Name";
	$result = mysqli_query($conn,$query);


if (!$result) {
    echo "ERRORS";
}

	while($row = $result->fetch_assoc()){
		echo " <option value=" . $row['Classification_Name'] .">". $row['Classification_Name'] ."</option>";
		
		
	}

$conn->close();

  


?>