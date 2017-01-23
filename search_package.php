
<?php include 'connection.php';?>
<?php


	if(isset($_POST['search2'])) {
	$fields = array('Label_UPC', 'Source', 'Ingredients', 'Label_Description');
	$field2 = array('Label_UPC', 'Source', 'Ingredients', 'Label_Description', 'date1');

    $conditions = array();
	    $flag1 = false;
//(empty($_POST[$field]) && strlen($_POST[$field]) == 0 ?NULL :$data[5])

 foreach($field2 as $field){
      if(!empty($_POST[$field]) && strlen($_POST[$field]) != 0 ){
          $flag1 = true;
          break;
      }else {
          continue;
      }

 }

if($flag1){
	$flag ='0';
   foreach($fields as $field){
	

        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
           
			 
		   // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	
      $query = "Select * FROM $dbname.Package ";
						
				if(count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
    }		
				 if(isset($_POST['date1']) && $_POST['date1'] != ''){
			   $from_date = $_POST['date1'];

				$to_date = $_POST['date2'];
			 if($flag==1){
		     
			            $query .= " AND Collection_Date between '$from_date' and '$to_date'";
						}else{
							$query .= " WHERE Collection_Date between '$from_date' and '$to_date'";

						}
}		

		$result = mysqli_query($conn,$query);
			 $rowcount=mysqli_num_rows($result);
 if($rowcount < 1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >No data found </h3 >\" </script>";
 }
	

			if (!$result) {
			echo "ERRORS";
					}
	 while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> <a href=view_product.php?ProductID=" .$row['ProductIDP'] . ">". $row['Label_UPC'] . "</a></td> <td>" . $row['Label_Description'] . "</td>  <td>" . $row['Source'] . "</td><td>" . $row['Collection_Date'] . "</td><td>" . $row['Create_Date'] . "</td><td>" . $row['Last_Edit_Date'] . "</td><td>" . $row['Last_Edited_By'] . "</td></tr>";                       

	 }
	}else{

        echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >Must enter at least one fields</h3>\" </script>";
    }
	}
	
$conn->close();
?>