<?php

$db = parse_ini_file("conn.ini");

/* now we can use the info in that file to create the appropriate, string connection, based on type, or just using the other info */


$servername = "127.0.0.1";// $db['host']; 
$username = "romario";//$db['user'];    
$password = "romario";// $db['pass'];    
$dbname = "fcdr";//$db['name'];     
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
