

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


 

	$query2 =  "alter table Product add column Restaurant_Type text"; 	
    if(mysqli_query($conn,$query2)){

        echo "Restaurant Type added \n\n";
    }else{

        echo "Failed to add a new column";
    }	
	

	
		$query3 =  "alter table Product add column Type text"; 	
        if(mysqli_query($conn,$query3)){
                 echo " Type added \n\n";

        }	

			$query4 =  "alter table Package add column Product_Grouping text"; 	
        if(mysqli_query($conn,$query4)){
            echo " Product Grouping added \n\n";
        }
	

				$query5 =  "Alter table Package add column Nft_Last_Update_Date date"; 

        if(mysqli_query($conn,$query5)){
            echo "Nft_Last_Update_Date added \n\n";
        }
		

					$query6 =  "Alter table Package add column Informed_Dining_Program boolean"; 	
      if(mysqli_query($conn,$query6)){
          echo "Informed_Dining_Program added \n\n";
      }


	
	
		$query =  "Alter table Package add column Child_Item boolean"; 	


        if(mysqli_query($conn,$query)){
            echo "Child_Item added \n\n";

        }


							


$conn->close();
?>
</body>

</html>