<?php include 'connection.php';?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){



	$username = $_POST['uname'];
	$password = $_POST['psw'];


		$get_user =<<<EOQ
		Select * from Users
		where Username = ? AND Password = ?

EOQ;

							$stmt = $conn->prepare($get_user);
					     	$stmt->bind_param("ss",$username,$password);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();
	

	
	$row = $result->fetch_assoc();	
	if(mysqli_num_rows($result)>0){
		
		$username = $row['Name'];
		$_SESSION['currentuser'] = $username;
		


	}else{
	
	
		$sanitation_errors[] = "Error";
		//$tableau["errorPassword"] = "<div class=\"error\" style=\"color:#FF0000;\">Wrong username and/or password</div>";
		
	
		
	}
	
	


	

	
	}

	
?>
