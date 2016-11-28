<?php

$db = parse_ini_file("conn.ini");

/* now we can use the info in that file to create the appropriate, string connection, based on type, or just using the other info */


$servername = $db['host']; // "127.0.0.1";
$username =$db['user'];    // DB username
$password =$db['pass'];    // DB password
$dbname = $db['name'];     //"FCDR";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$UPC12 = ($_GET['PackageID']?$_GET['PackageID']:'');
?>
