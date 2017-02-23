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

$query = "Alter TABLE Sales Add Column Classification_Number float(4,6)";
$result = mysqli_query($conn, $query);

if($result){
    echo "Sucess Number"; 
    $query2 = "Alter TABLE Sales Add Column Classification_Type Text";
$result2 = mysqli_query($conn, $query2);
if($result2){
 echo "Sucess Type"; 

}else{
    echo "Failed 2";
}
}else{
    echo "None were created";
}




?>
</body>

</html>