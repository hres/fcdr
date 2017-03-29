
<!DOCTYPE html>
<html>
<body>

<?php include 'connection.php';?>
<?php


echo "<h1>add classification</h1>";

$query = "ALTER TABLE Package Add column Classification_Number FLOAT(6,6)";
$result = mysqli_query($conn, $query);
if($result){
    echo "CN added";
$query2 = "ALTER TABLE Package Add column Classification_Name TEXT";
$result2 = mysqli_query($conn, $query2);
if($result2){
    echo "Both were created";
}
}else{
    echo "FAILED";
}



?>

</body>
</html>
