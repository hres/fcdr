<?php

$db = parse_ini_file("/etc/sodium-monitoring/conn.ini");


$servername = $db['host'];
$username   = $db['user'];
$password   = $db['pass'];
$dbname     = $db['name'];
$conn       = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
