<?php


 include 'session.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {



			 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
				  header ('Location: error404.php');
			 }
	}
     $_SESSION['token'] = bin2hex(random_bytes(32));
	$token = $_SESSION['token'];




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

<a href="addUser.php" class = "btn btn-default">Add User</a>
<table>
<tr>
<th>User Name</th>

<th>Edit</th>
<th>User Role</th>
<th></th>
</tr>



<?php include "connection.php"; 
		$get_users =<<<EOQ
		Select * from Users

EOQ;

$stmt_first = $conn->prepare($get_users);
$stmt_first->execute(); 
$result = $stmt_first->get_result();
 while($row = $result->fetch_assoc()) {
     
    //   <span class="glyphicon glyphicon-trash"></span>
echo "<tr> <td> ". $row['Username'] . "</a></td>
<td><a href=editUserB.php?UserID=" .$row['UserID'] . ">". $row['Name'] . "</a></td>
<td>". $row['User_Role'] . "</td>
<td><a href=deleteUser.php?UserID=" .$row['UserID'] . "><span class=\"glyphicon glyphicon-trash\"></span></a></td>

</tr>


</tr>";



 }


 ?>
</table>

</div>


		
	
		
		</main>
<?php include 'footer.php';?>



</body>
</html>