
<?php include 'connection.php';?>
<?php		 

       $man = $_GET['q'];
	   
	   $query = "Select Classification_Name from $dbname.Classification WHERE Classification_Number = '$man'"; 
	   $result = mysqli_query($conn,$query);
	
	   $row = $result->fetch_assoc();
	  echo $row['Classification_Name'];
	   
	   
    

	
	
	
?>
	
	
	
	
	
	
	
	
	