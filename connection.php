<?php

$db = parse_ini_file("conn.ini");

/* now we can use the info in that file to create the appropriate, string connection, based on type, or just using the other info */


$servername = $db['host']; 
$username =$db['user'];    
$password =$db['pass'];    
$dbname = $db['name'];     
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
