<?php
include ('connection.php');

	if(isset($_GET['search1']) && $_SERVER["REQUEST_METHOD"] == "GET") {
	 //error_reporting(E_ALL);
//ini_set('display_errors', 1); 

//P= product, PK = Package, S = Sales, C=Classification

/*

    Omitted All collection dates

*/

	   // if (!empty($_GET['token'])) {
   
  //$_GET['token'] =  rtrim($_GET['token']);
//$_SESSION['token'] =   rtrim($_SESSION['token']);
    //if (hash_equals(trim($_SESSION['token']),trim($_GET['token']))) {
         // Proceed to process the form data

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


for($i = 0; $i < 19; ++$i){
  if(isset($_GET[$inputs_fields_name[$i]]) && $_GET[$inputs_fields_name[$i]] != '' && !ctype_space($_GET[$inputs_fields_name[$i]])) {
            // create a new condition while escaping the value inputed by the user (SQL Injection) && !ctype_space($_GET[$field])
            $variable = $fields_name[$i];
            $conditions[] = "$variable LIKE '%" . mysqli_real_escape_string($conn,$_GET[$inputs_fields_name[$i]]) . "%'";
            $conditions_2[] = "$variable LIKE ?";
            $conditions_name[] = "'%".$_GET[$inputs_fields_name[$i]] . "%'";

  }

}

 if(isset($_GET['date1']) && $_GET['date1'] != '' && $_GET['date2'] && $_GET['date2'] != ''){

      $from_date = filter_var($_GET["date1"], FILTER_SANITIZE_STRING);

				$to_date = filter_var($_GET["date2"], FILTER_SANITIZE_STRING);

        
				$conditions[] 	 = " PK.Collection_Date between '$from_date' and '$to_date'";

     $conditions_2[]  = " PK.Collection_Date between ? and ? ";
     $conditions_name[] = $from_date;  
     $conditions_name[] = $to_date; 

 }

 if(isset($_GET['dateFrom']) && $_GET['dateFrom'] != '' && $_GET['dateTo'] && $_GET['dateTo'] != ''){

      $from_date1 = filter_var($_GET["dateFrom"], FILTER_SANITIZE_STRING);

				$to_date1 = filter_var($_GET["dateTo"], FILTER_SANITIZE_STRING);
				$conditions[] 	 = " S.Collection_Date between '$from_date1' and '$to_date1'";

     $conditions_2[]  = " S.Collection_Date between ? and ?";
     $conditions_name[] = $from_date1;  
     $conditions_name[] = $to_date1; 

 }


 if(isset($_GET['Dollar_Rank_From']) && $_GET['Dollar_Rank_From'] != '' && $_GET['Dollar_Rank_To'] && $_GET['Dollar_Rank_To'] != ''){

  
             // FILTER_FLAG_ALLOW_FRACTION
      $Dollar_Rank_From = filter_var($_GET["Dollar_Rank_From"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

			$Dollar_Rank_To = filter_var($_GET["Dollar_Rank_To"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);   //filter_var($_GET["Kilo_Rank"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
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

       $result = $stmt_query->get_result();
        $rowcount=mysqli_num_rows($result);


      while($row = $result->fetch_assoc()) {
		 echo "<tr><td><a href=view_product.php?ProductID=" .$row['ProductID'] . " target = '_blank'>". $row['Description'] ."</a></td>
      <td>" . $row['Product_Brand'] . "</td>
      <td>" . $row['Product_Manufacturer'] . "</td>
    <td>" . $row['Classification_Name'] . "</td>
     <td>" . $row['Classification_Number'] . "</td>    
     <td>" . $row['Classification_Type'] . "</td>
    <td>" . $row['CNF_CODE'] . "</td>
    <td>" . $row['Cluster_Number'] . "</td>
    <td>" . $row['Product_Comments'] . "</td>
    <td>" . $row['Sales_UPC'] . "</td>
    <td>" . $row['Sales_Description'] . "</td>
    <td>" . $row['Sales_Year'] . "</td>
    <td>" . $row['Nielsen_Category'] . "</td>
    <td>" . $row['Sales_Source'] . "</td>
    <td>" . $row['Sales_Date'] . "</td>
    <td>" . $row['Dollar_Rank'] . "</td>
    <td>" . $row['Sales_Comments'] . "</td> 
     <td>" . $row['Label_UPC'] . "</td>
     <td>" . $row['Label_Description'] . "</td>
    <td>" . $row['Label_Source'] . "</td> 
     <td>" . $row['Ingredients'] . "</td>
     <td>" . $row['Label_Collection_Date'] . "</td>    
     <td>" . $row['Label_Comments'] . "</td>
        
      </tr>";      

       }




}

  }
?>
