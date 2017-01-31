<?php include 'connection.php';?>

<?php

$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');

	
	 $fields = array('Brand','Description', 'Manufacturer', 'Classification_Number','Classification_Name', 'CNF_CODE','Classification_Type', 'Last_Edited_by','Cluster_Number');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	
	
	//$query = "Select P.ProductID, P.Description, C.Classification_Name, C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type   from $dbname.Product P LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID ";
	//$query2 = "Select ProductIDS From $dbname.Sales where SalesID = $salesID";
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


	$get_ID =<<<EOQ
		Select SalesID 
        FROM Sales
        WHERE SalesID = ?

EOQ;

							$stmt1 = $conn->prepare($get_ID);
                             $stmt1->bind_param("i",$salesID);
						     $stmt1->execute();	
							$result2 = $stmt1->get_result();									
							
	
	
		

		//mysqli_query('SET NAMES utf8');
		//mysqli_query('SET CHARACTER SET utf8');
		
if (!$result) {
    echo "ERRORS";
}
 $rowcount=mysqli_num_rows($result);
 if($rowcount < 1){
	 echo "No data found ";
 }

	$row2 = $result2->fetch_assoc();
	$OldProductID = $row2['ProductIDS'];
	
	while($row = $result->fetch_assoc()) {
	echo "<div > <a href=relink_market.php?OldProductID=$OldProductID&SalesID=$salesID&NewProductID=" .$row['ProductID'] . " onClick=\"return confirm('Re-link to this Product?')\">". $row['Description'] . "</a><div><br>";                       

	}

	
	
	
	
	
	
$conn->close();
?>
