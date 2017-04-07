<?php include 'connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');

	

	
	 $fields = array('Brand','Description', 'Manufacturer', 'Classification_Number', 'CNF_CODE','Classification_Type', 'Last_Edited_by','Cluster_Number');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($__GET[$field]) && $__GET[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$__GET[$field]) . "%'";
        }
    }
	
	
	
	//$query = "Select P.ProductID, P.Description, C.Classification_Name, C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type   from $dbname.Product P LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID ";
	//$query2 = "Select ProductIDP From $dbname.Package where PackageID = $PackageID";
	if(count($conditions) > 0) {
        // append the conditions
       // $query .= "WHERE " . implode (' AND ', $conditions); 
      
	$array1 = implode (' AND ', $conditions);

	$first_query =<<<EOQ
    SELECT P.ProductID, P.Description, C.Classification_Name, 
    C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type  
     from 
     Product P LEFT JOIN Product_Classification PC 
     ON P.ProductID = PC.ProductID 
     LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID
     WHERE $array1
EOQ;
		
   }else{
	$first_query =<<<EOQ
    SELECT P.ProductID, P.Description, C.Classification_Name, 
    C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type  
     from 
     Product P LEFT JOIN Product_Classification PC 
     ON P.ProductID = PC.ProductID 
     LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID
    
EOQ;


   }

   $stmt_first = $conn->prepare($first_query);
    $stmt_first->execute(); 
    $result = $stmt_first->get_result();

	//$result = mysqli_query($conn,$query);
	//$result2= mysqli_query($conn,$query2);

	$get_ID =<<<EOQ
		Select ProductIDP 
        FROM Package
        WHERE PackageID = ?

EOQ;

							$stmt1 = $conn->prepare($get_ID);
                             $stmt1->bind_param("i",$PackageID);
						     $stmt1->execute();	
							$result2 = $stmt1->get_result();									
							
	
	
		
if (!$result) {
    echo "ERRORS";
}
 $rowcount=mysqli_num_rows($result);
 if($rowcount < 1){
	 echo "No data found";
 }
	$row2 = $result2->fetch_assoc();
	$OldProductID = $row2['ProductIDP'];
	 while($row = $result->fetch_assoc()) {
		//echo "<div> <a href=view_product.php?ProductID=" .$row['ProductID'] . "> ". $row['Description'] . "</a></div>"
	echo "<div > <a href=relink_product.php?OldProductID=$OldProductID&PackageID=$PackageID&NewProductID=" .$row['ProductID'] . " onClick=\"return confirm('Re-link to this Product?')\">". $row['Description'] . "</a><div><br>";                       

	}

	
	
	
	
	
	
$conn->close();
?>
