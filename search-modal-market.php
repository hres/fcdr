<?php include 'connection.php';?>

<?php

$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');

	
	 $fields = array('Brand','Description', 'Manufacturer', 'Classification_Number','Classification_Name', 'CNF_CODE','Classification_Type', 'Last_Edited_by','Cluster_Number');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	
	
	$query = "Select P.ProductID, P.Description, C.Classification_Name, C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type   from $dbname.Product P LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID ";
	$query2 = "Select ProductIDS From $dbname.Sales where SalesID = $salesID";
	if(count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
		
   }
  /* $query .=" UNION Select * from FCDR.Product P RIGHT JOIN Product_Classification PC ON P.ProductID = PC.ProductID RIGHT JOIN Classification C ON PC.ClassificationID = C.ClassificationID ";
	if(count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
		
   }*/
	$result = mysqli_query($conn,$query);
	$result2= mysqli_query($conn,$query2);
		mysqli_query('SET NAMES utf8');
		mysqli_query('SET CHARACTER SET utf8');
		
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
		//echo "<div> <a href=view_product.php?ProductID=" .$row['ProductID'] . "> ". $row['Description'] . "</a></div>"
	echo "<div > <a href=relink_market.php?OldProductID=$OldProductID&SalesID=$salesID&NewProductID=" .$row['ProductID'] . " onClick=\"return confirm('Re-link to this Product?')\">". $row['Description'] . "</a><div><br>";                       

	}

	
	
	
	
	
	
$conn->close();
?>
