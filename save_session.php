<?php include 'connection.php';?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){




	$username = $_POST['uname'];
	$hashedPassword = $_POST['psw']; 

		$get_user =<<<EOQ
		Select * from Users
		where Username = ? 

EOQ;

							$stmt = $conn->prepare($get_user);
					     	$stmt->bind_param("s",$username);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();
	

	
	$row = $result->fetch_assoc();	
	if(mysqli_num_rows($result)>0){
		
	

		$password = $row['Password'];

		if(password_verify($hashedPassword,$password)){
			
		$username = $row['Name'];
		$_SESSION['currentuser'] = $username;
		$_SESSION['role'] = $row['User_Role'];
		$S_SESSION['id'] = $row['UserID'];

		}else{
$sanitation_errors[] = "Error";

		}

	}else{
	
	
		$sanitation_errors[] = "Error";

	}
	
	


	

	
	}

	
?>
