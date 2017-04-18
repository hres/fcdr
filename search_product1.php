

<?php include 'connection.php';?>

<?php



	if(isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
	
  
   
  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);
    //if (hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
         // Proceed to process the form data

	 $fields = array('Brand','Description', 'Manufacturer', 'Classification_Number', 'CNF_CODE','Classification_Type', 'Comments','Cluster_Number');
    $conditions = array();
    $flag = false;
//(empty($_POST[$field]) && strlen($_POST[$field]) == 0 ?NULL :$data[5])

 foreach($fields as $field){
      if(!empty($_POST[$field]) && strlen($_POST[$field]) != 0 && !ctype_space($_POST[$field]) ){
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





$array1 = implode (' AND ', $conditions);
	$first_query =<<<EOQ
    SELECT P.ProductID, P.Description, P.Cluster_Number,C.Classification_Name, C.Classification_Number, P.Brand, P.Manufacturer, P.CNF_CODE, C.Classification_Type
    FROM Product P 
    LEFT JOIN Product_Classification PC
    ON P.ProductID = PC.ProductID 
    LEFT JOIN Classification C ON PC.ClassificationID = C.ClassificationID
    WHERE $array1
EOQ;

$stmt_first = $conn->prepare($first_query);
    $stmt_first->execute(); 
    $result = $stmt_first->get_result();
	


	 $rowcount=mysqli_num_rows($result);
 
 if($rowcount < 1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >No data found</h3> \" </script>";
 }

if (!$result) {
    echo "ERRORS";
}

	 while($row = $result->fetch_assoc()) {
		 
		 echo "<tr><td> <a href=view_product.php?ProductID=" .$row['ProductID'] . " target = '_blank'>". $row['Description'] . "</a></td><td>" . $row['Brand'] . "</td><td>" . $row['Manufacturer'] . "</td><td>" . $row['Classification_Number'] . "</td><td>" . $row['Classification_Name'] . "</td><td>" . $row['Classification_Type'] . "</td><td>" . $row['CNF_CODE'] . "</td> <td>" . $row['Cluster_Number'] . "</td></tr>";                       
		

	 }
    }else{

        echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >Must enter at least one field</h3>\" </script>";
    }




	}
  
	
	
$conn->close();
?>



