<?php include 'connection.php';?>
<?php
	session_start();
	
	
	
	$tableau = array();
	$tableau["error"] = "<div class=\"error\" style=\"color:#FF0000;\">Try again<div>";

	$username = $_POST['uname'];
	$password = $_POST['psw'];
	//Username,Password
	$query = "Select * from Users where Username = '$username' AND Password = '$password'";
	$result = mysqli_query($conn,$query);
	
	$row = $result->fetch_assoc();	
	if(mysqli_num_rows($result)>0){
		
		$_SESSION['currentuser'] = $username;
		
		$tableau["error"] = "No";
		$tableau["success"] = "<p style=\"color: #00b300; padding:25px;\"><h3>You have successfully logged in as '$username', <a href=\"index.php\">go to the home page...</a></h3></p>";	
		
	}else{
	
	
	
		$tableau["errorPassword"] = "<div class=\"error\" style=\"color:#FF0000;\">Wrong username and/or password</div>";
		
	
		
	}
	
	
	

	echo json_encode($tableau);
	
?>
