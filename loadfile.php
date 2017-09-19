<?php

include "connection.php";
	$query ="

                                 LOAD DATA LOCAL INFILE \'/home/romario/Downloads/Sodium.csv\' 
INTO TABLE Classification
FIELDS TERMINATED BY ',' 
ENCLOSED by '\"' ESCAPED BY '\\\'
LINES TERMINATED BY '\\r\\n'
IGNORE 1 LINES
 (ClassificationID,
  Classification_Number,
  Classification_Name,
  Classification_Type)
";


$result = mysqli_query($conn, $query);
if($result){
    echo "File successfully loaded";
//     if(mysqli_query($conn, "Delete from TempTable where Sales_UPC < '2'")){
//         echo "Empty rows deleted";
        
//          if(mysqli_query($conn, "Delete from TempTable where Sales_UPC = 'UPC'")){
//              echo "BAD DATA";
//     }
// }
}else{
							
							die('Error : '. $conn->error);
						}
?>