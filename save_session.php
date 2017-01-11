<?php
	session_start();
	
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
	}
?>
