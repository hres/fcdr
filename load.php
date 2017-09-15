<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>title</title>
</head>
<body>
<?php
include "connection.php";
	$query2 =  "delete from Classification where ClassificationID > 0"; 	
    if(mysqli_query($conn,$query2)){
        echo "success";
        include "loadfile.php";
    }else{
     echo "fail";
    }
	


?>
</body>
</html>
