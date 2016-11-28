<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php include 'connection.php';?>

<?php
$ImageID = $_GET['ImageID'];
$query = "Select * from $dbname.Images where ImageID = $ImageID";

$result = mysqli_query($conn,$query);

 
$row = $result->fetch_assoc();
$ext = $row['Extension'];
echo '<img src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'"/>';





?>




</body>
</html>
