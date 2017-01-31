<?php include 'connection.php';?>

<?php

	$list_classification =<<<EOQ
		Select Distinct Classification_Name 
		 from Classification ORDER BY Classification_Name

EOQ;

							$stmt = $conn->prepare($list_classification);
					  
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
	



if (!$result) {
    echo "An error occured";
}

	while($row = $result->fetch_assoc()){
		echo " <option value=" . $row['Classification_Name'] .">". $row['Classification_Name'] ."</option>";
		
		
	}

$conn->close();

  


?>