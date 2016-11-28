<?php include 'connection.php';?>

<?php

$PID = ($_GET['ProductID']?$_GET['ProductID']:'');
	
	$query = "  SELECT * FROM $dbname.Sales P where P.ProductIDS = $PID";
	$result = mysqli_query($conn,$query);
						
							
							
							

if (!$result) {
    echo "ERRORS";
}
	
	while($row = $result->fetch_assoc())  {
		$r_y = $row['Year_Recorded'];
		 echo "<tr><td><a href=sales_details.php?SalesID=" .$row['SalesID'] . ">" . $row['Sales_UPC'] . "</a></td> <td>" . $row['Sales_Description'] . "</td><td>" . $row['Dollar_Volume'] . "</td><td>" . $row['Kilo_Vol'] . "</td><td>" . $row['Sales_Year'] . "</td><td>" . $row['Nielsen_Category'] . "</td><td>" . $row['Source'] . "</td></tr>";                       
		
	 }
	


$conn->close();
?>