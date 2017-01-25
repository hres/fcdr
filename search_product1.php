

<?php include 'connection.php';?>

<?php



	if(isset($_POST['search'])) {
	
	 $fields = array('Brand','Description', 'Manufacturer', 'Classification_Number','Classification_Name', 'CNF_CODE','Classification_Type', 'Comments','Cluster_Number');
    $conditions = array();
    $flag = false;
//(empty($_POST[$field]) && strlen($_POST[$field]) == 0 ?NULL :$data[5])

 foreach($fields as $field){
      if(!empty($_POST[$field]) && strlen($_POST[$field]) != 0 ){
          $flag = true;
          break;
      }else {
          continue;
      }

 }

if($flag){




    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	
	
	$query = "Select P.ProductID, P.Description, C.Classification_Name, C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type   from $dbname.Product P LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID ";
	//$query = "Select * from Product";
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
	 $rowcount=mysqli_num_rows($result);
		// echo "<script>document.getElementById(\"noResult\").innerHTML = \"$rowcount records returned\" </script>";
 
 if($rowcount < 1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >No data found</h3> \" </script>";
 }
/* mysqli_query('SET NAMES utf8');
mysqli_query('SET CHARACTER SET utf8'); */
if (!$result) {
    echo "ERRORS";
}

	 while($row = $result->fetch_assoc()) {
		 
		 echo "<tr><td> <a href=view_product.php?ProductID=" .$row['ProductID'] . ">". $row['Description'] . "</a></td><td>" . $row['Brand'] . "</td><td>" . $row['Manufacturer'] . "</td><td>" . $row['Classification_Number'] . "</td><td>" . $row['Classification_Name'] . "</td><td>" . $row['Classification_Type'] . "</td><td>" . $row['CNF_CODE'] . "</td> <td>" . $row['Cluster_Number'] . "</td></tr>";                       
		

	 }
    }else{

        echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >Must enter at least one field</h3>\" </script>";
    }

	}
	
	
$conn->close();
?>



