
<?php include 'connection.php';?>
<?php

	if(isset($_POST['search1'])) {
	 $fields = array('Sales_UPC', 'Nielsen_Category', 'Source', 'Sales_Year', 'Sales_Description', 'Comments');
	  $field2 = array('Sales_UPC', 'Nielsen_Category', 'Source', 'Sales_Year', 'Sales_Description', 'Comments', 'date1');
    $conditions = array();
    $flag1 = false;
//(empty($_POST[$field]) && strlen($_POST[$field]) == 0 ?NULL :$data[5])

 foreach($field2 as $field){
        if(!empty($_POST[$field]) && strlen($_POST[$field]) != 0 && !ctype_space($_POST[$field]) ){
          $flag1 = true;
          break;
      }else {
          continue;
      }

 }

if($flag1){









  foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
		
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	

		 if(isset($_POST['date1']) && $_POST['date1'] != ''){
			 
			   $from_date = $_POST['date1'];

				$to_date = $_POST['date2'];
					 $conditions[] 	 = " Collection_Date between '$from_date' and '$to_date'";

}
		
		$array1 = implode (' AND ', $conditions);

	$first_query =<<<EOQ
    SELECT *
    FROM Sales 
    WHERE $array1
EOQ;

$stmt_first = $conn->prepare($first_query);
    $stmt_first->execute(); 
    $result = $stmt_first->get_result();
	 $rowcount=mysqli_num_rows($result);
		 //echo "<script>document.getElementById(\"noResult\").innerHTML = \"$rowcount records returned\" </script>";
 
 if($rowcount < 1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >No data found <h3 >\" </script>";
 }

if (!$result) {
    echo "ERRORS";
}
	
	while($row = $result->fetch_assoc())  {
		 echo "<tr><td><a href=view_product.php?ProductID=" .$row['ProductIDS'] . " target = '_blank'>". $row['Sales_UPC'] ."</a></td><td>" . $row['Sales_Description'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Sales_Year'] . "</td><td>" . $row['Nielsen_Category'] . "</td><td>" . $row['Dollar_Volume'] . "</td><td>" . $row['Kilo_Vol'] . "</td> </tr>";                       
		
	 }
	}else{

		        echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >Must enter at least one field</h3>\" </script>";

	}
	}

$conn->close();
?>