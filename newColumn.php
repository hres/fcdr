

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<h1>Adding new columns</h1>
<?php include 'connection.php';?>
<?php


 	
		$query =  "SET SQL_MODE='ALLOW_INVALID_DATES'"; 	


        if(mysqli_query($conn,$query)){
            echo "Ivalid dated added <br>";

        }else{

            echo "not added";
             echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";
        	
        }


	$query2 =  "alter table Product add column Restaurant_Type text"; 	
    if(mysqli_query($conn,$query2)){

        echo "Restaurant Type added <br>";
    }else{

        echo "Failed to add a new column";
         echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";
        
    }	
	

	
		$query3 =  "alter table Product add column Type text"; 	
        if(mysqli_query($conn,$query3)){
                 echo " Type added <br>";

        }else{
            //echo "Failed to add a new column Type <br>" ;
            echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";
        }	


	


		



	



							


$conn->close();
?>
</body>

</html>