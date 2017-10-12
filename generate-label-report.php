
<?php include 'connection.php';?>
<?php


	if(isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  
    error_reporting(E_ALL);
ini_set('display_errors', 1);
  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);
 
    //if (hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
  
    


	$fields = array('Classification_Name', 'Classification_Number', 'Nielsen_Category', 'Label_UPC', 'Source', 'Manufacturer', 'Label_Description');

    $conditions = array();







   foreach($fields as $field){
	


        if(!empty($_POST[$field])&& strlen($_POST[$field]) != 0  && !ctype_space($_POST[$field]) ) {
           
			 
		   // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn,$_POST[$field]) . "%'";
        }
    }
	
	
				 if(isset($_POST['date1']) && $_POST['date1'] != ''){
                $from_date = filter_var($_POST["date1"], FILTER_SANITIZE_STRING);

                $to_date = filter_var($_POST["date2"], FILTER_SANITIZE_STRING);

				 $conditions[] 	 = " Collection_Date between '$from_date' and '$to_date'";

}		

if(count($conditions) > 0){

$array1 = implode (' AND ', $conditions);

	$first_query =<<<EOQ
    SELECT *
    FROM Package 
    WHERE $array1
EOQ;
}else{
    	$first_query =<<<EOQ
    SELECT *
    FROM Package 

EOQ;
}


$stmt_first = $conn->prepare($first_query);
    $stmt_first->execute(); 
    $result = $stmt_first->get_result();
	
$editpackagequery = <<<EOQ
SELECT *
  FROM Package K
 INNER JOIN Product_Component PC
    ON K.PackageID      = PC.PackageID
 INNER JOIN Components C
    ON PC.ComponentID   = C.ComponentID
 WHERE C.Component_Name = ?
   AND K.PackageID      = ?
   AND PPD              = ?
EOQ;

// 	 $rowcount=mysqli_num_rows($result);
//  if($rowcount < 1){
// 	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >No data found </h3 >\" </script>";
//  }
	

	 while($row = mysqli_fetch_assoc($result)){
        $ProductID = $row['ProductIDP'];
       $Sodium_Amount= NULL;
       $Sodium_Unit = NULL;
       $Sodium_Daily_Value = NULL;
       $Sodium_Amount_as_prepared = NULL;
       $Sodium_Unit_as_prepared=NULL;
       $Sodium_Daily_Value_as_prepared = NULL;


       	$editpackagestmt = $conn->prepare($editpackagequery);
        $Component_Name = 'Sodium';
        $PPD = 1;
        $editpackagestmt->bind_param("sii", $Component_Name, $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_ = $editpackagestmt->get_result();
        $row_ = $result_->fetch_assoc();
        $Sodium_Amount = $row_['Amount'];
        $Sodium_Unit   = $row_['Amount_Unit_Of_Measure'];
        $Sodium_Daily_Value   = $row_['Daily_Value'];
        $PPDD=0;  
        $as_prepared = $conn->prepare($editpackagequery);
          $as_prepared->bind_param("sii", $Component_Name, $row['PackageID'], $PPDD);
          $as_prepared->execute();
          $result_asprepared = $as_prepared->get_result();
          $row_asprepared = $result_asprepared->fetch_assoc();
          $Sodium_Amount_as_prepared = $row_asprepared['Amount'];
          $Sodium_Unit_as_prepared   = $row_asprepared['Amount_Unit_Of_Measure'];
          $Sodium_Daily_Value_as_prepared   = $row_asprepared['Daily_Value'];


          echo "<tr>

            <td> <a href=package_details.php?ProductID=$ProductID&PackageID=" .$row['PackageID'] . " target = '_blank'>". $row['Label_UPC'] . "</a></td>
            <td>". $row['Nielsen_Item_Rank_UPC'] .                                " </td>
            <td>". $row['Nielsen_Category'] .                                " </td>
            <td>". $row['Label_Description'] .                                " </td>
            <td>". $row['Brand'] .                                " </td>
            <td>". $row['Manufacturer'] .                                " </td>
            <td>". $row['Country'] .                                " </td>
            <td>". $row['Package_Size'] .                                " </td>
            <td>". $row['Package_Size_UofM'] .                                " </td>
            <td>". $row['Number_Of_Units'] .                                " </td>
            <td>". $row['Storage_Statement'] .                                " </td>
            <td>". $row['Collection_Date'] .                                " </td>
            <td>". $row['Health_Claim'] .                                " </td>
            <td>". $row['Nutrition_Claim'] .                                " </td>
            <td>". $row['Other_Package_Statement'] .                                " </td>
            <td>". $row['Suggested_Direction'] .                                " </td>
            <td>". $row['Ingredients'] .                                " </td>
            <td>". $row['MultipartFlag'] .                                " </td>
            <td>". $row['Common_Measure'] .                                " </td>
            <td>". $row['Per_Serving_Amount'] .                                " </td>
            <td>". $row['Per_Serving_Unit'] .                                " </td>
            <td>". $row['PPD_Per_Serving_Amount'] .                                " </td>
            <td>". $row['PPD_Per_Serving_UofM'] .                                " </td>
            <td>". $row['Per_Serving_Amount_In_Grams'] .                                " </td>
            <td>". $row['Per_Serving_Amount_In_Grams_PPD'] .                                " </td>
            <td>". $row['Comments'] .                                " </td>
            <td>". $row['Source'] .                                " </td>
            <td>". $row['Product_Description'] .                                " </td>
            <td>   $Sodium_Amount   </td>
            <td>   $Sodium_Unit  </td>
            <td>   $Sodium_Daily_Value</td>
            <td>   $Sodium_Amount_as_prepared   </td>
            <td>   $Sodium_Unit_as_prepared  </td>
            <td>   $Sodium_Daily_Value_as_prepared</td>         
          
          
                            
          
          
                </tr>";
                     

	 }
	
	//}
    
    }
	
$conn->close();
?>