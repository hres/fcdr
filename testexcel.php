<?php
ob_start();

ob_get_clean();
header( "Content-Type: application/vnd.ms-excel" );
header( "Content-disposition: attachment; filename=spreadsheet.xlsx" );
echo 'First Name' . "\t" . 'Last Name' . "\t" . 'Phone' . "\n";
echo 'John' . "\t" . 'Doe' . "\t" . '555-5555' . "\n";
die();
?>