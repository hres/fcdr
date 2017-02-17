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

$query = "Insert Into Product (Description) VALUES ('TEST DESCRIPTION')";
$result = mysqli_query($conn, $query);
if($result){
    echo "<h1>Product Successfully created</h1>";
}else{
    echo "Failed to Create the product";
}





?>
</body>

</html>