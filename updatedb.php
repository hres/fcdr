<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php
include "connection.php";

$query = "ALTER TABLE Users ADD COLUMN Name text";
$result = mysqli_query($conn,$query);

$query1 = "UPDATE Users SET Name = 'Michel Vigneault' where UserID = 3";
$result1 = mysqli_query($conn,$query1);

$query2 = "UPDATE Users SET Name = 'Konstantinia Arvaniti' where UserID = 2";
$result2 = mysqli_query($conn,$query2);

$query3 = "UPDATE Users SET Name = 'Lidia Loukine' where UserID = 5";
$result3 = mysqli_query($conn,$query3);

$query4 = "UPDATE Users SET Name = 'Isabelle Rondeau' where UserID = 4";
$result4 = mysqli_query($conn,$query4);

$query5 = "UPDATE Users SET Name = 'Sarah Hatt'  where UserID = 6";
$result5 = mysqli_query($conn,$query5);

$query6 = "UPDATE Users SET Name = 'Admin'  where UserID = 1";
$result6 = mysqli_query($conn,$query6);

$query7 = "INSERT INTO Users (Username, Password, Name) Values ('lelvidge','lelvidge571','Lisa-Anne Elvidge')";
$result7 = mysqli_query($conn,$query7);

$query8 = "INSERT INTO Users (Username, Password, Name) Values ('mverreau','mverreau415','Marie-France Verrault')";
$result8 = mysqli_query($conn,$query8);

$query9 = "INSERT INTO Users (Username, Password, Name) Values ('systpier','systpier185','Sylvie St-Pierre')";
$result9 = mysqli_query($conn,$query9);

$query10 = "INSERT INTO Users (Username, Password, Name) Values ('msegstr','msegstr427','Mark Segstro')";
$result10 = mysqli_query($conn,$query10);

$query11 = "INSERT INTO Users (Username, Password, Name) Values ('darobert','darobert672','Daniel Robert')";
$result11 = mysqli_query($conn,$query11);

if($result11){
    echo "OYESSHHHOO";
}else{
    echo "SOMETHING WENT WRONG";
}
?>

</body>
</html>