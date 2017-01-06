<?php
// Connection 


$filename = "Webinfopen.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
// Write data to file
$row = 0;
while ($row <10) {

    echo "Romy";
	++$row;
}
?>