<?php include 'connection.php';?>
<?php
// Connection 


$filename = "newfile.xlsx"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
// Write data to file
$row = 0;
$table = '<table>';
$table .= '<tr>';
$table .= '<td>1st row, 1st cell</td>';
$table .= '<td>1st row, 2nd cell</td>';
$table .= '</tr>';
$table .= '<tr>';
$table .= '<td>2nd row, 1st cell</td>';
$table .= '<td>2nd row, 2nd cell</td>';
$table .= '</tr>';
$table .= '</table>';
echo $table;
?>