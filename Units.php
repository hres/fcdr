<?php include 'connection.php';?>

<?php


	
$query = "Select * from $dbname.Unit_Of_Measure";
	$result = mysqli_query($conn,$query);


if (!$result) {
    echo "ERRORS";
}

	while($row = $result->fetch_assoc()){
		echo " <option value=" . $row['UofM_Name'] .">". $row['UofM_Name'] ."</option>";
		
		
	}

$conn->close();

  


?>