<?php
include ('connection.php');

	if(isset($_POST['search1'])) {
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 

//P= product, PK = Package, S = Sales, C=Classification

/*

    Omitted All collection dates

*/


$conditions= array();
$conditions_2= array();
$conditions_name= array();
$fields_name = array(
                'P.Description',
                'PK.Label_UPC',
                'S.Sales_UPC',
                'PK.Label_Description',
                'S.Sales_Description',
                'Sales_Year',
                'S.Nielsen_Category',
                'P.Manufacturer',
                'P.Brand',
                'C.Classification_Number',
                'C.Classification_Name',
                'C.Classification_Type',
                'P.CNF_Code',
                'PK.Source',
                'S.Source',
                'PK.Ingredients',
                'P.Cluster_Number',
                'P.Comments',
                'PK.Comments',
                'S.Comments'
            
                                );

$inputs_fields_name = array(
                'Description',
                'Label_UPC',
                'Sales_UPC',
                'Label_Description',
                'Sales_Description',
                'Sales_Year',
                'Nielsen_Category',
                'Manufacturer',
                'Brand',
                'Classification_Number',
                'Classification_Name',
                'Classification_Type',
                'CNF_Code',
                'Label_Source',
                'Sales_Source',
                'Ingredients',
                'Cluster_Number',
                'Comments',
                'Label_Comments',
                'Sales_Comments'
            
                                );


for($i = 0; $i < 20; ++$i){
  if(isset($_POST[$inputs_fields_name[$i]]) && $_POST[$inputs_fields_name[$i]] != '' && !ctype_space($_POST[$inputs_fields_name[$i]])) {
            // create a new condition while escaping the value inputed by the user (SQL Injection) && !ctype_space($_POST[$field])
            $variable = $fields_name[$i];
            $conditions[] = "$variable LIKE '%" . mysqli_real_escape_string($conn,$_POST[$inputs_fields_name[$i]]) . "%'";
            $conditions_2[] = "$variable LIKE ?";
            $conditions_name[] = "'%".$_POST[$inputs_fields_name[$i]] . "%'";

  }

}

 if(isset($_POST['date1']) && $_POST['date1'] != '' && $_POST['date2'] && $_POST['date2'] != ''){

      $from_date = $_POST['date1'];

				$to_date = $_POST['date2'];

        
				$conditions[] 	 = " PK.Collection_Date between '$from_date' and '$to_date'";

     $conditions_2[]  = " PK.Collection_Date between ? and ? ";
     $conditions_name[] = $from_date;  
     $conditions_name[] = $to_date; 

 }

 if(isset($_POST['dateFrom']) && $_POST['dateFrom'] != '' && $_POST['dateTo'] && $_POST['dateTo'] != ''){

      $from_date1 = $_POST['dateFrom'];

				$to_date1 = $_POST['dateTo'];
				$conditions[] 	 = " S.Collection_Date between '$from_date1' and '$to_date1'";

     $conditions_2[]  = " S.Collection_Date between ? and ?";
     $conditions_name[] = $from_date1;  
     $conditions_name[] = $to_date1; 

 }

 if(isset($_POST['Dollar_Rank_From']) && $_POST['Dollar_Rank_From'] != '' && $_POST['Dollar_Rank_To'] && $_POST['Dollar_Rank_To'] != ''){

      $Dollar_Rank_From = $_POST['Dollar_Rank_From'];

				$Dollar_Rank_To = $_POST['Dollar_Rank_To'];
				$conditions[] 	 = " Dollar_Rank between $Dollar_Rank_From and $Dollar_Rank_To";

     $conditions_2[]  = " Dollar_Rank between ? and ? ";
     $conditions_name[] = $Dollar_Rank_From;  
     $conditions_name[] = $Dollar_Rank_To; 

 }
if(count($conditions)<1){
	 echo "<script>document.getElementById(\"noResult\").innerHTML = \"<h3 >Must Enter at least one field<h3 >\" </script>";



}else{


 $array1 = implode(" AND ",$conditions);

 $in = str_repeat('s', count($conditions_name));
 $array2 = implode(",",$conditions_name);

//date1 & date2 for Labels; dateFrom & dateTo for Market Share

$query=<<<EOQX
SELECT P.ProductID, P.Description, PK.Label_UPC, S.Sales_UPC, PK.Label_Description,
	   S.Sales_Description, S.Sales_Year, S.Nielsen_Category, P.Manufacturer AS Product_Manufacturer, 
       P.Brand AS Product_Brand, C.Classification_Number, C.Classification_Name, C.Classification_Type, 
       P.CNF_CODE, PK.Source AS Label_Source, S.Source AS Sales_Source, PK.Ingredients,
       PK.Collection_Date AS Label_Collection_Date, S.Collection_Date AS Sales_Date, 
       S.Dollar_Rank, P.Cluster_Number, P.Comments AS Product_Comments, PK.Comments AS Label_Comments,
       S.Comments AS Sales_Comments 
	   FROM Product P  LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
	   LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
	   LEFT JOIN Sales S ON P.ProductID = S.ProductIDS 
	   LEFT JOIN Package PK ON  P.ProductID = PK.ProductIDP WHERE $array1 
EOQX;




     $stmt_query = $conn->prepare($query);
      $stmt_query->execute();
     /*   $bind_arguments = [];
        $bind_arguments[] = $in;
        foreach ($conditions_name as $recordkey => $recordvalue)
        {
            $bind_arguments[] = & $conditions_name[$recordkey];    # bind to array ref, not to the temporary $recordvalue
        }
call_user_func_array(array($stmt_query, 'bind_param'), $bind_arguments);
     // $stmt_query->bind_param("$in", $array2); 
     if($stmt_query->execute()){
       echo "SuCESS";
     }else{
       echo "NOOOOOOOOOOO";
     } */
       $result = $stmt_query->get_result();
        $rowcount=mysqli_num_rows($result);


      while($row = $result->fetch_assoc()) {
		 echo "<tr><td><a href=view_product.php?ProductID=" .$row['ProductID'] . ">". $row['Description'] ."</a></td>
     <td>" . $row['Label_UPC'] . "</td>
     <td>" . $row['Sales_UPC'] . "</td>
     <td>" . $row['Label_Description'] . "</td>
     <td>" . $row['Sales_Description'] . "</td>
     <td>" . $row['Sales_Year'] . "</td>
     <td>" . $row['Nielsen_Category'] . "</td>

    <td>" . $row['Product_Manufacturer'] . "</td>
     <td>" . $row['Product_Brand'] . "</td>
     <td>" . $row['Classification_Number'] . "</td>
     <td>" . $row['Classification_Name'] . "</td>
     <td>" . $row['Classification_Type'] . "</td>
     <td>" . $row['CNF_CODE'] . "</td>


    <td>" . $row['Label_Source'] . "</td>
     <td>" . $row['Sales_Source'] . "</td>
     <td>" . $row['Ingredients'] . "</td>
     <td>" . $row['Label_Collection_Date'] . "</td>
     <td>" . $row['Sales_Date'] . "</td>
     <td>" . $row['Dollar_Rank'] . "</td>

     <td>" . $row['Cluster_Number'] . "</td>
     <td>" . $row['Product_Comments'] . "</td>
     <td>" . $row['Label_Comments'] . "</td>
     <td>" . $row['Sales_Comments'] . "</td>    
      </tr>";      

       }



/*while($row = $result->fetch_assoc()) 
     $stmt_query = $conn->prepare($query);
      $stmt_query->execute();
*/
}
  }
?>
