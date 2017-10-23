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
<h2>Update password</h2>
<form style="margin-top:50px;" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "?UserID=" .  $_GET['UserID']) ;?>">
  <div class="form-group">
    <label for="pwd1">New Password:</label>
    <input type="password"  pattern=".{5,}"   required title="5 characters minimum" class="form-control" id="pwd1" name="pass1">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm New Password:</label>
    <input type="password" pattern=".{5,}"   required title="5 characters minimum" class="form-control" id="pwd" name="pass2">
  </div>

  <button type="submit" class="btn btn-default" name="passwordForm">Submit</button>
</form>


<?php
	if(isset($_POST['passwordForm']) && $_SERVER["REQUEST_METHOD"] == "POST") {

$id= $_GET['UserID'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

if($pass1 === $pass2){


 $mpassword= password_hash($pass2, PASSWORD_BCRYPT, ['cost' => 12]);

   		$updateUser =<<<EOQ
		 UPDATE Users SET
		 Password = ? where UserID = ?

EOQ;
						$stmt = $conn->prepare($updateUser);
						$stmt->bind_param("si",$mpassword,$id);
						$result_insert = $stmt->execute();	
                        if($result_insert){

		echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Password Successfully updated. Redirecting to the home page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
		
		
		
		echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";


}else{

    echo "Failed updating the password, try again";
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