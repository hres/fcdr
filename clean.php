

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


	$query2 =  "Delete from $dbname.Users where Username = 'admin'"; 	
	if(mysqli_query($conn,$query2)){
		echo "yesss";
	}

	$query =  "Delete from $dbname.Users where Username = 'msegstr'"; 	
	if(mysqli_query($conn,$query2)){
		echo "yesss 2";
	}

	$query3 =  "Delete from $dbname.Users where Username = 'darobert'"; 	
	if(mysqli_query($conn,$query2)){
		echo "yesss 2";
	}


	echo "Database Cleared out";

							


$conn->close();
?>
</body>

</html>
