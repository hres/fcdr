<?php include 'connection.php';?>

<?php

/*

	$list_classification =<<<EOQ
		SELECT Distinct Classification_Number 
		 FROM Classification ORDER BY Classification_Number+0 ASC 

EOQ;

		 

							$stmt = $conn->prepare($list_classification);
					  
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
	*/

$query = "SELECT Distinct Classification_Number FROM Classification ORDER BY Classification_Number+0 ASC";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "ERRORS";
}

	while($row = $result->fetch_assoc()){
		echo " <option value=" . $row['Classification_Number'] .">". $row['Classification_Number'] ."</option>";
		
		
	}

$conn->close();

  


?>