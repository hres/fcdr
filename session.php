<?php

//$lifetime = 1200;  time() + $lifetime
session_start();
setcookie(session_name(), session_id(),true, "/", true);


 

if (!isset($_SESSION['currentuser'])) {
	header("Location: login.php");
	die();
	
}else{

}

?>
