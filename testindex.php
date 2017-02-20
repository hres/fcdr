<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
</h1>Test Queries</h1> <br><br>
<hr>

<?php
include "connection.php";
echo "<hr>";

$query = " Alter table Package Add column Calculated TINYINT";
$result = mysqli_query($conn, $query);
if($result){
    echo "<h1>Product Successfully created</h1>";
}else{
    echo "<h1>Failed to Create the product</h1>";
}





?>
</body>

</html>