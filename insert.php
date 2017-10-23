<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
Content of the document......

<?php include 'connection.php';?>
<?php

if(mysqli_query($conn, "alter table Users MODIFY column Password TEXT")){
    echo "Password type modified <br>";
}else{

    echo "failed Modifying password type";
}

if(mysqli_query($conn, "Alter table Users add column User_Role TEXT")){
    echo "Column added <br>";
}else{

    echo "failed Adding column <br>";
}



 $markpassword= password_hash("romario", PASSWORD_BCRYPT, ['cost' => 12]);

$query = "INSERT INTO  Users (Username, Password, Name, User_Role) VALUES ('romario', '$markpassword', 'Romario', 'admin') ";
if(mysqli_query($conn, $query)){
    echo "user added \n";
}else{
    echo "user not ";
}


?>
</body>

</html>