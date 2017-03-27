<?php 
include ('connection.php');

	if(isset($_POST['search'])) {
          $conditions = array();
        	 error_reporting(E_ALL);
ini_set('display_errors', 1); 
$fields_name = array(
                      'S.Sales_UPC',
                      'P.Description',
                      'S.Sales_Description',
                      'S.Sales_Year'  

            );
$inputs_fields_name = array(
                      'Sales_UPC',
                      'Description',
                      'Sales_Description',
                      'Sales_Year' 
       );



for($i = 0; $i < 4; ++$i){
  if(isset($_POST[$inputs_fields_name[$i]]) && $_POST[$inputs_fields_name[$i]] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $variable = $fields_name[$i];
            $conditions[] = "$variable LIKE '%" . mysqli_real_escape_string($conn,$_POST[$inputs_fields_name[$i]]) . "%'";
  }

}
/*
		 if(isset($_POST['date1']) && $_POST['date1'] != ''){
			 

    if(isset($_POST['date2']) && $_POST['date2'] != ''){

			   $from_date = $_POST['date1'];

				$to_date = $_POST['date2'];
					 $conditions[] 	 = " Collection_Date between '$from_date' and '$to_date'";
        }else{

        }
}		
*/
       if(count($conditions) > 0) {
 

		$array1 = implode (' AND ', $conditions);
	$query =<<<EOQ
   Select P.Description, S.Sales_Year, S.Collection_Date,
		  S.Sales_UPC, S.Sales_Description, S.Product_Grouping, 
          S.Manufacturer, S.Brand, S.Nielsen_Category, C.Classification_Number,
          S.Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, 
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist,
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;


        }else{
	$query =<<<EOQ
   Select P.Description, S.Sales_Year, S.Collection_Date,
		  S.Sales_UPC, S.Sales_Description, S.Product_Grouping, 
          S.Manufacturer, S.Brand, S.Nielsen_Category, C.Classification_Number,
          S.Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, 
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist,
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS

EOQ;
   
        }
    $stmt_first = $conn->prepare($query);
    $stmt_first->execute(); 
    $result = $stmt_first->get_result();





	while($row = $result->fetch_assoc())  {




echo "<tr>
         <td>". $row['Description'] .                " </td>
         <td>". $row['Sales_Year'] .                 " </td>
         <td>". $row['Collection_Date'] .            " </td>
         <td>". $row['Sales_UPC'] .                  " </td>
         <td>". $row['Sales_Description'] .          " </td>
         <td>". $row['Product_Grouping'] .           " </td>
         <td>". $row['Manufacturer'] .               " </td>
         <td>". $row['Brand'] .                      " </td>
         <td>". $row['Nielsen_Category'] .           " </td>
         <td>". $row['Classification_Number'] .      " </td>
         <td>". $row['Cluster_Number'] .             " </td>
         <td>". $row['Control_Label_Flag'] .         " </td>
         <td>". $row['Kilo_Share'] .                 " </td>
         <td>". $row['Kilo_Vol'] .                   " </td>
         <td>". $row['Kilo_Volume_Percent_Change'] . " </td>
         <td>". $row['Kilo_Rank'] .                  " </td>
         <td>". $row['Kilo_Volume_Total'] .          " </td>
         <td>". $row['Dollar_Share'] .               " </td>
         <td>". $row['Dollar_Volume'] .              " </td>
         <td>". $row['Dollar_Volume_Total'] .        " </td>
         <td>". $row['Average_AC_Dist'] .            " </td>
         <td>". $row['Average_Retail_Price'] .       " </td>
         <td>". $row['Sales_Comments'] .             " </td>
         <td>". $row['Product_Comment'] .            " </td>
         </tr>";


    }
    
echo " </tbody></table>";
echo "<script>document.getElementById(\"toHide\").style.display= \"block\";</script>";

 mysqli_close($conn);





    }

?>