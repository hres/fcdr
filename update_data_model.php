
<!DOCTYPE html>
<html>
<body>

<?php include 'connection.php';?>
<?php


echo "<h1>TYPE CHANGE  classification</h1>";

$query = "  ALTER TABLE Package modify Classification_Number varchar (9)";
$result = mysqli_query($conn, $query);
if($result){
    echo "Type has been changed";

}else{
    echo "FAILED";
}



?>

</body>
</html>
