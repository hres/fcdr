<?php include 'connection.php';?>

<?php


	
$query = "Select * from $dbname.Unit_Of_Measure";
	$result = mysqli_query($conn,$query);


			$get_user =<<<EOQ
		Select * from Unit_Of_Measure
		
EOQ;

							$stmt = $conn->prepare($get_user);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();
	



if (!$result1) {
    echo "ERRORS";
}

	while($row = $result->fetch_assoc()){
		echo " <option value=" . $row['UofM_Name'] .">". $row['UofM_Name'] ."</option>";
		
		
	}

$conn->close();

  


?>