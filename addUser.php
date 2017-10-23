<?php


 include 'session.php';

?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" integrity="sha384-o6l2EXLcx4A+q7ls2O2OP2Lb2W7iBgOsYvuuRI6G+Efbjbk6J4xbirJpHZZoHbfs" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>




	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">




<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->





	


	
		<style>





td, th {
    padding: 9px;
    border: none;
}
th{
    text-align: left;

}
tr:nth-child(odd){
    background-color: #f0f5f5;
}


th:last-child, td:last-child{
border-right: 1px solid lightgray;
border-left:1px solid lightgray;

}
th:first-child, td:first-child{
border-left: 1px solid lightgray;
}
table{
    border-collapse: collapse;
}
tr:last-child, th{
  border-bottom:   1px solid lightgray;
}
/*td:last-child{
    text-align: right;
}
 tr:first-child{
	 border-top: 1px solid lightgray;

 }
	*/
    .form-control{

        width:60%;
    }
	</style>
</head>
<body class="wide comments example">
				   <?php 
				   if (!hash_equals(trim($_SESSION['role']),'admin')) {

						   header ('Location: index.php');
					   }
				   
				    ?>
<?php include 'header.php';?>


<main role="main" property="mainContentOfPage" class="container">


<div class="container" style="min-height:500px;">





<?php include "connection.php";


$userID = ($_GET['UserID']?$_GET['UserID']:'');

		$get_users =<<<EOQ
		Select * from Users where UserID = ?

EOQ;

$stmt_first = $conn->prepare($get_users);
	$stmt_first->bind_param("i",$userID);
$stmt_first->execute(); 
$result = $stmt_first->get_result();




 ?>
<h2>New User</h2>
<form style="margin-top:50px;" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>">
  <div class="form-group">
    <label for="name">Name:</label>
    <input   required class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input   required class="form-control" id="username" name="username">
  </div>
<div class="form-group">
  <label for="role">Role:</label>
  <select class="form-control" id="role" name="role">
    <option value="" selected>Regular user</option>
    <option value="admin">admin</option>

  </select>
</div>
  <div class="form-group">
    <label for="pwd1">Password:</label>
    <input type="password"  pattern=".{5,}"   required title="5 characters minimum" class="form-control" id="pwd1" name="pass1">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" pattern=".{5,}"   required title="5 characters minimum" class="form-control" id="pwd" name="pass2">
  </div>

  <button type="submit" class="btn btn-default" name="addUser">Submit</button>
</form>


<?php
	if(isset($_POST['addUser']) && $_SERVER["REQUEST_METHOD"] == "POST") {
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$username = $_POST['username'];
$name = $_POST['name'];
$role = $_POST['role'];


if($pass1 === $pass2){



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
         echo "<h3>Username not available</h3>";

    }else{

 $mpassword= password_hash($pass2, PASSWORD_BCRYPT, ['cost' => 12]);

		$add_user =<<<EOQ
		INSERT INTO  Users (Username, Password, Name, User_Role) VALUES (?, ?, ?, ?) 

EOQ;

$stmt2 = $conn->prepare($add_user);
$stmt2->bind_param("ssss",$username, $mpassword, $name, $role);
$result_add = $stmt2->execute();



if($result_add){
    echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>User successfully added. wait a moment...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
		
		
		
		echo "<script>setTimeout(\"location.href = 'manageusers.php';\",3000);</script>";

}else{
    echo "<h3>Failed, try again</h3>";
}


    }
                          

}else{

    echo "Password don't match";
}

}


?>
<div id="confirm-message"></div>
</div>		
	
		
		</main>
<?php include 'footer.php';?>



</body>
</html>