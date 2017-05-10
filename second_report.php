<?php 
include ('connection.php');

//	if(isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {



$list_of_classification= array();
$list_of_nielsen_category= array();
$conditions = array();

foreach ($_POST['Classification_Number'] as  $selectedOptionClass){
    //echo $selectedOptionClass;

if($selectedOptionClass != null){


    $list_of_classification[] = "C.Classification_Number LIKE '%" .  filter_var($selectedOptionClass, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) . "%'"; 
}
}

foreach ($_POST['Nielsen_Category'] as  $selectedOption){

if($selectedOption != null){

//echo $selectedOption;

       $list_of_nielsen_category[] = "S.Nielsen_Category LIKE '%" . filter_var($selectedOption, FILTER_SANITIZE_STRING). "%'"; 

}
}

$fields_name = array(
                      'S.Sales_UPC',
                      'P.Description',
                      'S.Sales_Description',
                      'S.Sales_Year',
                      'P.Brand',
                      'P.Manufacturer',
                      'C.Classification_Number'
                      

            );
$inputs_fields_name = array(
                      'Sales_UPC',
                      'Description',
                      'Sales_Description',
                      'Sales_Year',
                      'Brand',
                      'Manufacturer',
                      'Classification_Name'
  
       );



for($i = 0; $i < count($inputs_fields_name); ++$i){
  if(isset($_POST[$inputs_fields_name[$i]]) && $_POST[$inputs_fields_name[$i]] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $variable = $fields_name[$i];
            $conditions[] = "$variable LIKE '%" . test_input(mysqli_real_escape_string($conn,$_POST[$inputs_fields_name[$i]])) . "%'";
  }

}

       if(count($conditions) > 0 && count($list_of_classification) < 1 && count($list_of_nielsen_category) <1) {

 $array1 = implode (' AND ', $conditions);

	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank,
          S.Manufacturer, S.Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;


        }else if(count($conditions) < 1 && count($list_of_classification) > 0 && count($list_of_nielsen_category) < 1){

            $array1 = implode (' OR ', $list_of_classification);   

	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank,
          S.Manufacturer, S.Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;


        }else if(count($conditions) < 1 && count($list_of_classification) > 0 && count($list_of_nielsen_category) > 0){
            $array1 = implode (' OR ', $list_of_classification);   
                      $list_nielsen = implode (' OR ', $list_of_nielsen_category); 
        
           $array1 = "$array1 AND (" . "$list_nielsen)";

	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank,
          S.Manufacturer, S.Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;

        }else if(count($conditions) < 1 && count($list_of_classification) < 1 && count($list_of_nielsen_category) > 0){


    $array1 = implode (' OR ', $list_of_nielsen_category); 

	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank,
          S.Manufacturer, S.Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;

        }else if(count($conditions) > 0 && count($list_of_classification) > 0 && count($list_of_nielsen_category) < 1){
            
            $array1 = implode (' AND ', $conditions);

             $list_of_classification1 = implode (' OR ', $list_of_classification);   
        
           $array1 = "$array1 AND (" . "$list_of_classification1)";


           	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank,
          S.Manufacturer, S.Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;

        }else if(count($conditions) > 0 && count($list_of_classification) < 1 && count($list_of_nielsen_category) > 0){
            $array1 = implode (' AND ', $conditions);

            $list_nielsen = implode (' OR ', $list_of_nielsen_category); 
        
           $array1 = "$array1 AND (" . "$list_nielsen)";

                      	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank,
          S.Manufacturer, S.Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
          S.Average_Retail_Price, S.Comments AS Sales_Comments, P.Comments AS Product_Comment
          FROM Product P   LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
          LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID 
          INNER JOIN Sales S ON P.ProductID = S.ProductIDS
          WHERE $array1
EOQ;

        }
        
        
        else{
            
	$query =<<<EOQ
   Select P.Description, P.Manufacturer AS Product_Manufacturer, P.Brand As Product_Brand, P.Cluster_Number AS Product_Cluster_Number,
          C.Classification_Number AS Product_Classification_Number, C.Classification_Name AS Product_Classification_Name,
          S.Sales_Year, S.Collection_Date,S.Sales_Description, S.Brand as Sales_Brand, S.Manufacturer As Sales_Manufacturer,
		  S.Sales_UPC,  S.Product_Grouping, S.Dollar_Rank, 
          S.Manufacturer AS Sales_Manufacturer, S.Brand AS Sales_Brand, S.Nielsen_Category, S.Classification_Number AS Sales_Classification_Number, S.Control_Label_Flag,
          S.Cluster_Number AS Sales_Cluster_Number, S.Control_Label_Flag, S.Kilo_Share, S.Kilo_Vol, 
          S.Kilo_Volume_Percent_Change, S.Kilo_Rank, S.Kilo_Volume_Total, S.Dollar_Volume_PerCentage_Change,
          S.Dollar_Share,S.Dollar_Volume, S.Dollar_Volume_Total, S.Average_AC_Dist, S.Source, 
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
         <td>". $row['Product_Manufacturer'] .                 " </td>
         <td>". $row['Product_Brand'] .            " </td>
         <td>". $row['Product_Classification_Number'] .                  " </td>
         <td>". $row['Product_Classification_Name'] .          " </td>
         <td>". $row['Product_Cluster_Number'] .           " </td>
         <td>'". $row['Sales_UPC'] .               "' </td>
         <td>". $row['Sales_Description'] .                      " </td>
         <td>". $row['Sales_Brand'] .           " </td>
         <td>". $row['Sales_Manufacturer'] .      " </td>
         <td>". $row['Dollar_Rank'] .             " </td>
         <td>". $row['Dollar_Volume'] .         " </td>
         <td>". $row['Dollar_Share'] .                 " </td>
         <td>". $row['Dollar_Volume_PerCentage_Change'] .                   " </td>
         <td>". $row['Kilo_Vol'] . " </td>
         <td>". $row['Kilo_Share'] .                  " </td>
         <td>". $row['Kilo_Volume_Percent_Change'] .          " </td>
         <td>". $row['Average_AC_Dist'] .               " </td>
         <td>". $row['Average_Retail_Price'] .              " </td>
         <td>". $row['Source'] .        " </td>
         <td>". $row['Nielsen_Category'] .            " </td>
         <td>". $row['Collection_Date'] .       " </td>
         <td>". $row['Sales_Year'] .             " </td>
         <td>". $row['Control_Label_Flag'] .            " </td> 

         <td>". $row['Kilo_Volume_Total'] .              " </td>
         <td>". $row['Kilo_Rank'] .        " </td>
         <td>". $row['Dollar_Volume_Total'] .            " </td>
         <td>". $row['Sales_Cluster_Number'] .       " </td>
         <td>". $row['Product_Grouping'] .             " </td>
         <td>". $row['Sales_Classification_Number'] .            " </td>
         </tr>";


    }
    
echo " </tbody></table>";
echo "<script>document.getElementById(\"toHide\").style.display= \"block\";</script>";

 mysqli_close($conn);




    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>