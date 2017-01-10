<?php include 'connection.php';?>
<?php
// Connection 


$filename = "success.xlsx"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
// Write data to file

echo "OYYESOOO";
?>