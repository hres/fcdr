
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
Select P.PackageID, 
	   P.Label_UPC,
       P.Label_Description,
       P.Brand,
       P.Manufacturer,
       P.Country,
       P.Collection_Date,
       P.Health_Claim,
       P.Nutrition_Claim,
       P.Other_Package_Statement,
       P.Ingredients,
       P.MultipartFlag,
       P.Common_Measure,
       P.Per_Serving_Amount,
       P.Per_Serving_Unit,
       P.Source,
       P.Comments,
       P.Product_Grouping,
       P.Product_Description,
       P.Nft_Last_Update_Date,
       P.Informed_Dining_Program,
       P.ProductIDP,
       P.Child_Item,
       Product.Type,
       P.Classification_Number,
       P.Per_Serving_Amount_In_Grams,
       Product.Restaurant_Type
       from Package P INNER JOIN Product ON ProductIDP = ProductID 
    WHERE $array1
EOQ;
}else{
    	$first_query =<<<EOQ
Select P.PackageID, 
	   P.Label_UPC,
       P.Label_Description,
       P.Brand,
       P.Manufacturer,
       P.Country,
       P.Collection_Date,
       P.Health_Claim,
       P.Nutrition_Claim,
       P.Other_Package_Statement,
       P.Ingredients,
       P.MultipartFlag,
       P.Common_Measure,
       P.Per_Serving_Amount,
       P.Per_Serving_Unit,
       P.Source,
       P.Comments,
       P.Product_Grouping,
       P.Product_Description,
       P.Nft_Last_Update_Date,
       P.Informed_Dining_Program,
       P.ProductIDP,
       P.Child_Item,
       P.Classification_Number,
       Product.Type,
       P.Per_Serving_Amount_In_Grams,
       Product.Restaurant_Type
       from Package P INNER JOIN Product ON ProductIDP = ProductID 

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


	

	 while($row = mysqli_fetch_assoc($result)){
       $ProductID = $row['ProductIDP'];
        include "label-report-nutrients.php";

          echo "<tr>

            <td> <a href=package_details.php?ProductID=$ProductID&PackageID=" .$row['PackageID'] . " target = '_blank'>". $row['Label_UPC'] . "</a></td>
           
             <td>". $row['Label_Description'] .                                " </td>
            <td>". $row['Brand'] .                                " </td>
            <td>". $row['Manufacturer'] .                                " </td>
            <td>". $row['Country'] .                                " </td>
            <td>". $row['Collection_Date'] .                                " </td>
            <td>". $row['Health_Claim'] .                                " </td>
            <td>". $row['Nutrition_Claim'] .                                " </td>
            <td>". $row['Other_Package_Statement'] .                                " </td>
            <td>". $row['Ingredients'] .                                " </td>
            <td>". $row['MultipartFlag'] .                                " </td>
            <td>". $row['Common_Measure'] .                                " </td>
            <td>". $row['Per_Serving_Amount'] .                                " </td>
            <td>". $row['Per_Serving_Unit'] .                                " </td>
          
            <td>   $Energy   </td>
             <td>$EnergyPer100g </td>
            <td>   $Fat_Perserving  </td>
            <td>   $Saturated_Fat</td>
             <td>$Saturated_Fat_Per100g </td>
            <td>   $Trans_Fat   </td>
            <td>   $Polyunsaturated_Fat  </td>
            <td>   $Carbohydrates_Perserving</td>         
          
                 
            <td>   $Fibre_Perserving   </td>
            <td>   $Sugars  </td>
             <td>$Sugar_Per100g </td>
            <td>   $Protein</td>
            <td>   $Cholesterol   </td>
            <td>   $Sodium_Perserving  </td>
             <td>$Sodium_Per100g </td>
            <td>   $Sodium_DV</td>         
          
            <td>   $Potassium_Perserving  </td>
            <td>   $Calcium_DV</td>
            <td>   $Iron_DV   </td>
            <td>   $Vitamin_A_DV  </td>
            <td>   $Vitamin_C_DV</td>          
          
            <td>". $row['Comments'] .                                " </td>
            <td>". $row['Source'] .                                " </td>
            <td>". $row['Product_Description'] .                                " </td>
            <td>". $row['Type'] . "</td>
            <td>". $row['Restaurant_Type'] .                                " </td>  
            <td>".  ($row['Informed_Dining_Program']===0?'No': ($row['Informed_Dining_Program']===1?'Yes':'')).  " </td> 
            <td>". $row['Nft_Last_Update_Date'] .                                " </td>
            <td>". ($row['Child_Item']===0?'No': ($row['Child_Item']===1?'Yes':'')) .                                " </td>
            <td>". $row['Product_Grouping'] .                                " </td>
            <td>". $row['Classification_Number'] .                                " </td>
                </tr>";
                     

	 }
	

    }
	
$conn->close();
?>