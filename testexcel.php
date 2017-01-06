<?php
// Connection 


$filename = "Webinfopen.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysql_query('select name,work from info');
// Write data to file
$row = 0;
while ($row <10) {

    echo "Romy";
	++$row;
}
?>