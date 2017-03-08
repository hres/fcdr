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
$query = "  alter table Product_Classification drop foreign key Product_Classification_ibfk_1";
$result = mysqli_query($conn, $query);

if($result){
    echo "Yes Droped";
    $query2 = "  alter table Product_Classification add Constraint ClassificationID FOREIGN KEY (ClassificationID) 
  REFERENCES Classification (ClassificationID) ";
$result2 = mysqli_query($conn, $query2);
if($result2){
echo "Yes Droped2";
}
}


?>
</body>

</html>