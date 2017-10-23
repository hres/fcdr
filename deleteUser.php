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






<h2>Are you sure you want to permanently delete this user?</h2>
<form style="margin-top:50px;" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "?UserID=" .  $_GET['UserID']) ;?>">


  <button type="submit" class="btn btn-default" name="passwordForm">Yes, delete user </button>
</form>
<a href="manageusers.php" class="btn btn-default">No, Back to Manage Users page</a>

<?php
	if(isset($_POST['passwordForm']) && $_SERVER["REQUEST_METHOD"] == "POST") {

$id= $_GET['UserID'];


if($pass1 === $pass2){


 $mpassword= password_hash($pass2, PASSWORD_BCRYPT, ['cost' => 12]);

   		$deleteUser =<<<EOQ
		 Delete from Users where UserID = ?

EOQ;
						$stmt = $conn->prepare($deleteUser);
						$stmt->bind_param("i",$id);
						$result_insert = $stmt->execute();	
                        if($result_insert){

                            		echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>User Successfully deleted. Redirecting to the Manage Users page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
		
		
		
		echo "<script>setTimeout(\"location.href = 'manageusers.php';\",2500);</script>";




}else{

   
                            		echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Failed deleting the. Redirecting to the Manage Users page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
		
		
		
		echo "<script>setTimeout(\"location.href = 'manageusers.php';\",2500);</script>";


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