<?php include 'connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');

		$list_fields =<<<EOQ
		select C.Component_Name, C.Display_Order, PC.PPD,C.flag, PC.Amount, PC.Amount_Unit_Of_Measure, PC.Daily_Value 
		from  Product_Component PC  INNER JOIN Components C ON PC.ComponentID=  C.ComponentID
		WHERE PC.PackageID = ? Order by Display_Order asc


EOQ;


							$stmt_list = $conn->prepare($list_fields);
					     	$stmt_list->bind_param("i",$PackageID);
							$stmt_list->execute();	
							$result_list= $stmt_list->get_result();

		$list_fields2 =<<<EOQ
		select Per_Serving_Amount_In_Grams, Per_Serving_Amount, Per_Serving_Unit 
		from  Package
		WHERE PackageID = ? 

EOQ;

							$stmt_list2 = $conn->prepare($list_fields2);
					     	$stmt_list2->bind_param("i",$PackageID);
							$stmt_list2->execute();	
							$result_list2 = $stmt_list2->get_result();
							$row2 = $result_list2->fetch_assoc();
							$Per_Serving_Amount_In_Grams = $row2['Per_Serving_Amount_In_Grams'];
							$Per_Serving_Amount = $row2['Per_Serving_Amount'];
							$Per_Serving_Unit =  $row2['Per_Serving_Unit'];


if (!$result_list) {
    echo "ERRORS";
}
	while($row = $result_list->fetch_assoc()){
		if(($row['flag']== 'True' AND $row['PPD']==TRUE) OR ($row['PPD']==TRUE AND $row['flag']== 'False' AND ($row['Amount'] !=null or $row['Daily_Value'] !=null ))) {
		
		$row['Component_Name'] = ($row['Component_Name']==='Sugars Alcohol'?'Sugar Alcohols':$row['Component_Name']); 
		$row['Component_Name'] = ($row['Component_Name']==='Energy kj'?'Energy kJ':$row['Component_Name']); 
		$Per_100g = NULL;

		if(((!empty($row['Amount'])  && $row['Amount'] != NULL) || $row['Amount'] === '0') ){

				if(!empty($Per_Serving_Amount_In_Grams) && $Per_Serving_Amount_In_Grams != 0){

					$Per_100g  = ($row['Amount'] / $Per_Serving_Amount_In_Grams) * 100;

				}else if((empty($Per_Serving_Amount_In_Grams) || $Per_Serving_Amount_In_Grams == 0) && $Per_Serving_Unit == 'g' && $Per_Serving_Amount != 0){
					$Per_100g = ($row['Amount'] / $Per_Serving_Amount) * 100;
				}

		}
		
		echo "<tr><td>". $row['Component_Name'] . "</td><td>". $row['Amount'] . "</td><td>". $row['Amount_Unit_Of_Measure'] . "</td><td>". $row['Daily_Value'] . "</td><td>$Per_100g</td></tr>";                       
		}
}




	$fill_package =<<<EOQ
		Select * from Package P 
		where P.PackageID = ?

EOQ;

							$stmt = $conn->prepare($fill_package);
					     	$stmt->bind_param("i",$PackageID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();											
							
				
	$row = $result->fetch_assoc();

$conn->close();

?>