
<?php include 'connection.php';?>
<?php

	if(isset($_POST['search1'])) {
	 $fields = array('Sales_UPC', 'Nielsen_Category', 'Source', 'Sales_Year', 'Sales_Description', 'Comments');
    $conditions = array();
	$flag ='0';
  foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
			$flag='1';
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	
	$query = " SELECT *  FROM $dbname.Sales ";

						
			if(count($conditions) >0) {

			$query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
    }				
		
		 if(isset($_POST['date1']) && $_POST['date1'] != ''){
			 
			   $from_date = $_POST['date1'];

				$to_date = $_POST['date2'];
			 if($flag==1){
		     
			            $query .= " AND Sales_Year between '$from_date' and '$to_date'";
						}else{
							$query .= " WHERE Sales_Year between '$from_date' and '$to_date'";

						}
}
	$result = mysqli_query($conn,$query);
		 $rowcount=mysqli_num_rows($result);
 if($rowcount < 1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"No data found \" </script>";
 }

if (!$result) {
    echo "ERRORS";
}
	
	while($row = $result->fetch_assoc())  {
		 echo "<tr><td><a href=view_product.php?ProductID=" .$row['ProductIDS'] . ">". $row['Sales_UPC'] ."</a></td><td>" . $row['Sales_Description'] . "</td><td>" . $row['Source'] . "</td><td>" . $row['Sales_Year'] . "</td><td>" . $row['Nielsen_Category'] . "</td><td>" . $row['Dollar_Volume'] . "</td><td>" . $row['Kilo_Vol'] . "</td> </tr>";                       
		
	 }
	
	}

$conn->close();
?>