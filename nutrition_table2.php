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
							$result_list = $stmt_list->get_result();


		$list_fields2 =<<<EOQ
		select Per_Serving_Amount_In_Grams_PPD, PPD_Per_Serving_Amount, PPD_Per_Serving_UofM 
		from  Package
		WHERE PackageID = ? 

EOQ;

							$stmt_list2 = $conn->prepare($list_fields2);
					     	$stmt_list2->bind_param("i",$PackageID);
							$stmt_list2->execute();	
							$result_list2 = $stmt_list2->get_result();
							$row2 = $result_list2->fetch_assoc();
							$Per_Serving_Amount_In_Grams_PPD = $row2['Per_Serving_Amount_In_Grams_PPD'];
							$PPD_Per_Serving_Amount = $row2['PPD_Per_Serving_Amount'];
							$PPD_Per_Serving_UofM =  $row2['PPD_Per_Serving_UofM'];




if (!$result_list) {
    echo "An error occured, please check your fields and try again";
}
	while($row = $result_list->fetch_assoc()){
		if($row['PPD']==FALSE AND ($row['Amount'] !='' or $row['Daily_Value'] !=null )) {
		
		$row['Component_Name'] = ($row['Component_Name']==='Sugars Alcohol'?'Sugar Alcohols':$row['Component_Name']); 
		$row['Component_Name'] = ($row['Component_Name']==='Energy kj'?'Energy kJ':$row['Component_Name']); 
		$Per_100g = NULL;

		if(((!empty($row['Amount'])  && $row['Amount'] != NULL) || $row['Amount'] === '0') ){
				if((!empty($Per_Serving_Amount_In_Grams_PPD) && strlen($Per_Serving_Amount_In_Grams_PPD) != 0 ) && $Per_Serving_Amount_In_Grams_PPD != 0){
					$Per_100g  = ($row['Amount'] / $Per_Serving_Amount_In_Grams_PPD) * 100;
				}elseif((empty($Per_Serving_Amount_In_Grams_PPD) && strlen($Per_Serving_Amount_In_Grams_PPD) == 0 || $Per_Serving_Amount_In_Grams_PPD == 0) && $PPD_Per_Serving_UofM=== 'g' && $PPD_Per_Serving_Amount != 0 && !empty($PPD_Per_Serving_Amount) && strlen($PPD_Per_Serving_Amount) != 0 ){
					$Per_100g = ($row['Amount']/$PPD_Per_Serving_Amount) * 100;
				}

		}

		 echo "<tr><td>". $row['Component_Name'] . "</td><td >". $row['Amount'] . "</td><td >". $row['Amount_Unit_Of_Measure'] . "</td><td> ".$row['Daily_Value']."</td><td>$Per_100g</td></tr>";                       
	}}


	//$query2 = "  SELECT * FROM Package P where P.PackageID = $PackageID";

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