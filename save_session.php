<?php include 'connection.php';?>
<?php
	session_start();
	
	
	
	$tableau = array();
	$tableau["error"] = "<div class=\"error\" style=\"color:#FF0000;\">Try again<div>";

	$username = $_POST['uname'];
	$password = $_POST['psw'];
	//Username,Password
	$query = "Select * from Users where Username = $username AND Password = $password";
	$result = mysqli_query($conn,$query);
	
	$row = $result->fetch_assoc();	
	if(mysqli_num_rows($result)>0){
		
	$_SESSION['currentuser'] = $username;
		
		$tableau["error"] = "No";
		$tableau["success"] = "<p style=\"color: #00b300; padding:25px;\"><h3>You have successfully logged in as '$username', <a href=\"index.php\">go to the home page...</a></h3></p>";	
		
	}else{
	
	
	$pass = $row['Password'];
	$user = $row['Username'];
		if($username!=$user){
		$tableau["errorUsername"] = "<div class=\"error\" style=\"color:#FF0000;\">Wrong username</div>";
		
		}
		if($password!=$pass){
		$tableau["errorPassword"] = "<div class=\"error\" style=\"color:#FF0000;\">Wrong password</div>";
		
	}
		
	}
	
	
	

	echo json_encode($tableau);
	/* 
	if(array_key_exists('sign-in',$_POST))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		
		$conn_string = "host=web0.site.uottawa.ca port=15432  dbname=rokoh046 user=rokoh046 password=H)H(h8h7";	
		$dbconn=pg_connect($conn_string) or die('Connection failed');
		
		$query1 = "SELECT userid FROM final_project.rater WHERE email = '$email' AND Rpassword= '$password'";
		$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
		if (pg_num_rows($result1) > 0){		
		$_SESSION['currentuser'] = $email;
		echo "Success";
		header('Location:account.php');} 
		else{
		echo "Username and Password do not match any in our database. Are you registered?";}
		
		//pg_free_result($result);
		pg_free_result($result1);
		pg_close($dbconn);
	} */
?>
