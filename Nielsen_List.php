<?php include 'connection.php';?>

<?php

	$list_classification =<<<EOQ
		Select Distinct Nielsen_Category 
		 from Sales ORDER BY Nielsen_Category

EOQ;

							$stmt = $conn->prepare($list_classification);
					  
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
	



if (!$result) {
    echo "An error occured";
}

	while($row = $result->fetch_assoc()){
		echo " <option value='" . $row['Nielsen_Category'] ."'>". $row['Nielsen_Category'] ."</option>";
		
		
	}

$conn->close();

  


?>