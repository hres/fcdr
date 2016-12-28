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
		if(($row['flag']== 'True' AND $row['PPD']==TRUE) OR ($row['PPD']==TRUE AND $row['flag']== 'False' AND $row['Amount'] !='' )) {
		
		
		echo "<tr><td>". $row['Component_Name'] . "</td><td>". $row['Amount'] . "</td><td>". $row['Amount_Unit_Of_Measure'] . "</td><td>". $row['Daily_Value'] . "</td></tr>";                       
		}
}


	$query2 = "  SELECT * FROM Package P where P.PackageID = $PackageID";
	$result2 = mysqli_query($conn,$query2);

	
if (!$result2) {
    echo "ERRORS";
}

	$row = $result2->fetch_assoc();

$conn->close();

?>