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

if(mysqli_query($conn, "truncate table Users")){
    echo "table truncated \n";
}else{

    echo "failed truncating the table";
}

 $markpassword= password_hash("msegstr504", PASSWORD_BCRYPT, ['cost' => 12]);

$query = "INSERT INTO  Users (Username, Password, Name) VALUES ('msegstr', '$markpassword', 'Mark Segstro') ";
if(mysqli_query($conn, $query)){
    echo "Mark Segstro added \n";
}else{
    echo "Mark Segstro not ";
}

 $karvanitipassword= password_hash("karvaniti730", PASSWORD_BCRYPT, ['cost' => 12]);


$querykarvaniti = "INSERT INTO  Users (Username, Password, Name) VALUES ('karvaniti', '$karvanitipassword', 'Konstantinia Arvaniti') ";
if(mysqli_query($conn, $querykarvaniti)){
    echo "Konstantinia Arvaniti added \n";
}else{
    echo "Konstantinia Arvaniti not ";
}


 $mvigneaultpassword= password_hash("mvigneault348", PASSWORD_BCRYPT, ['cost' => 12]);


$querymvigneault = "INSERT INTO  Users (Username, Password, Name) VALUES ('mvigneault', '$mvigneaultpassword', 'Michel Vigneault') ";
if(mysqli_query($conn, $querymvigneault)){
    echo "Michel Vigneault added \n";
}else{
    echo "Michel Vigneault not ";
}


 $irondeaupassword= password_hash("irondeau434", PASSWORD_BCRYPT, ['cost' => 12]);


$queryirondeau = "INSERT INTO  Users (Username, Password, Name) VALUES ('irondeau', '$irondeaupassword', 'Isabelle Rondeau') ";
if(mysqli_query($conn, $queryirondeau)){
    echo "Isabelle Rondeau added \n";
}else{
    echo "Isabelle Rondeau not ";
}


 $lloukinepassword= password_hash("lloukine509", PASSWORD_BCRYPT, ['cost' => 12]);


$querylloukine = "INSERT INTO  Users (Username, Password, Name) VALUES ('lloukine', '$lloukinepassword', 'Lidia Loukine') ";
if(mysqli_query($conn, $querylloukine)){
    
    echo "Lidia Loukine added \n";
}else{
    echo "Lidia Loukine not ";
}



 $shattpassword= password_hash("shatt408", PASSWORD_BCRYPT, ['cost' => 12]);


$queryshatt = "INSERT INTO  Users (Username, Password, Name) VALUES ('shatt', '$shattpassword', 'Sarah Hatt') ";
if(mysqli_query($conn, $queryshatt)){
    
    echo "Sarah Hatt added \n";
}else{
    echo "Sarah Hatt not ";
}



 $lelvidgepassword= password_hash("lelvidge208", PASSWORD_BCRYPT, ['cost' => 12]);


$querylelvidge = "INSERT INTO  Users (Username, Password, Name) VALUES ('lelvidge', '$lelvidgepassword', 'Lisa-Anne Elvidge') ";
if(mysqli_query($conn, $querylelvidge)){
    
    echo "Lisa-Anne Elvidge added \n";
}else{
    echo "Lisa-Anne Elvidge not";
}


 $systpierpassword= password_hash("systpier711", PASSWORD_BCRYPT, ['cost' => 12]);


$querysystpier = "INSERT INTO  Users (Username, Password, Name) VALUES ('systpier', '$systpierpassword', 'Sylvie St-Pierre') ";
if(mysqli_query($conn, $querysystpier)){
    
    echo "Sylvie St-Pierre added \n";
}else{
    echo "Sylvie St-Pierre not added";
}


 $mverreaupassword= password_hash("mverreau636", PASSWORD_BCRYPT, ['cost' => 12]);


$querymverreau = "INSERT INTO  Users (Username, Password, Name) VALUES ('mverreau', '$mverreaupassword', 'Marie-France Verrault') ";
if(mysqli_query($conn, $querymverreau)){
    
    echo "Marie-France Verrault added \n";
}else{
    echo "Marie-France Verrault not added";
}


?>
</body>

</html>
