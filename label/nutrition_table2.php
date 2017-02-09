<?php include 'connection.php';?>

<?php

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');




$query ="select C.Component_Name, C.Display_Order, PC.PPD,C.flag, PC.Amount, PC.Amount_Unit_Of_Measure, PC.Daily_Value from  $dbname.Product_Component PC  INNER JOIN $dbname.Components C ON PC.ComponentID=  C.ComponentID
WHERE PC.PackageID = $PackageID Order by Display_Order asc";
	

	
	$result = mysqli_query($conn,$query);


if (!$result) {
    echo "ERRORS";
}
	while($row = $result->fetch_assoc()){
		if($row['PPD']==FALSE AND ($row['Amount'] !='' or $row['Daily_Value'] !=null )) {
		
		$row['Component_Name'] = ($row['Component_Name']==='Sugars Alcohol'?'Sugar Alcohols':$row['Component_Name']); 
		$row['Component_Name'] = ($row['Component_Name']==='Energy kj'?'Energy kJ':$row['Component_Name']); 


		 echo "<tr><td>". $row['Component_Name'] . "</td><td >". $row['Amount'] . "</td><td >". $row['Amount_Unit_Of_Measure'] . "</td><td> ".$row['Daily_Value']."</td></tr>";                       
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