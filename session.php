<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
if (!isset($_SESSION['currentuser'])) {
	header("Location: login.php");
	die();
	//echo "Your session is running " . $_SESSION['userName'];
}
?>
