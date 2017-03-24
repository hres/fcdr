<?php


session_start();

 

if (!isset($_SESSION['currentuser'])) {
	header("Location: login.php");
	die();
	
}else{
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];
}

?>
