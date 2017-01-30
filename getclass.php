
<?php include 'connection.php';?>
<?php		 

       $man = $_GET['q'];
	   
	   $query = "Select Classification_Name from $dbname.Classification WHERE Classification_Number = '$man'"; 
	   $result = mysqli_query($conn,$query);

	$get_classification =<<<EOQ
		Select Classification_Name from Classification
		where Classification_Number = ?


EOQ;

							$stmt = $conn->prepare($get_classification);
					     	$stmt->bind_param("d",$man);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
			

	
	   $row = $result->fetch_assoc();
	  echo $row['Classification_Name'];
	   
	   
    

	
	
	
?>
	
	
	
	
	
	
	
	
	