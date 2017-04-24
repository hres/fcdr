<?php include 'connection.php';?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	session_start();
	
	$old_sessionid = session_id();
	session_regenerate_id();

	$new_sessionid = session_id();
	

	$tableau = array();

	$tableau["error"] = "<div class=\"error\" style=\"color:#FF0000;\">Try again<div>";

	$username = $_POST['uname'];
	$password = $_POST['psw'];
	 //filter_var($_POST['token'], FILTER_SANATIZE_STRING);
	

	//Username,Password

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
		
		
		$tableau["error"] = "No";
		$tableau["success"] = "<p style=\"color: #00b300; padding:25px;\"><h3>You have successfully logged in as<span style=\"color:red\"> $username </span>, <a href=\"index.php\">go to the home page...</a></h3></p>";	
		
	}else{
	
	
	
		$tableau["errorPassword"] = "<div class=\"error\" style=\"color:#FF0000;\">Wrong username and/or password</div>";
		
	
		
	}
	
	


	

	echo json_encode($tableau);
	}
?>
