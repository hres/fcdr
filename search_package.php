
<?php include 'connection.php';?>
<?php


	if(isset($_POST['search2'])) {
	$fields = array('Label_UPC', 'Source', 'Ingredients', 'Label_Description');
	$field2 = array('Label_UPC', 'Source', 'Ingredients', 'Label_Description', 'date1');

    $conditions = array();
	    $flag1 = false;
//(empty($_POST[$field]) && strlen($_POST[$field]) == 0 ?NULL :$data[5])

 foreach($field2 as $field){
      if(!empty($_POST[$field]) && strlen($_POST[$field]) != 0 && !ctype_space($_POST[$field]) ){
          $flag = true;
          break;
      }else {
          continue;
      }

 }

if($flag){

	//$flag ='0';
   foreach($fields as $field){
	

        // if the field is set and not empty
        if(!empty($_POST[$field])&& strlen($_POST[$field]) != 0  && !ctype_space($_POST[$field]) ) {
           
			 
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
    FROM Package 
    WHERE $array1
EOQ;



$stmt_first = $conn->prepare($first_query);
    $stmt_first->execute(); 
    $result = $stmt_first->get_result();
	


	 $rowcount=mysqli_num_rows($result);
 if($rowcount < 1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >No data found </h3 >\" </script>";
 }
	

			if (!$result) {
			echo "ERRORS";
					}
	 while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> <a href=view_product.php?ProductID=" .$row['ProductIDP'] . " target = '_blank'>". $row['Label_UPC'] . "</a></td> <td>" . $row['Label_Description'] . "</td>  <td>" . $row['Source'] . "</td><td>" . $row['Collection_Date'] . "</td><td>" . $row['Create_Date'] . "</td><td>" . $row['Last_Edit_Date'] . "</td><td>" . $row['Last_Edited_By'] . "</td></tr>";                       

	 }
	}else{

        echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >Must enter at least one field</h3>\" </script>";
    }
	}
	
$conn->close();
?>