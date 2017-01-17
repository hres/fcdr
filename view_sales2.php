<?php include 'connection.php';?>

<?php

$SalesID = ($_GET['SalesID']?$_GET['SalesID']:'');


	$query = "  SELECT * FROM $dbname.Sales P where P.SalesID = $SalesID";
	$result = mysqli_query($conn,$query);
						
							
							
							

if (!$result) {
    echo "ERRORS";
}
	
$row = $result->fetch_assoc();
//$row['Dollar_Volume'] = is_float($row['Dollar_Volume'])? $row['Dollar_Volume']: number_format($row['Dollar_Volume']);
		//is_float 
		 echo "<tr><td>" . $row['Sales_UPC'] . "</td><td>$" . number_format($row['Dollar_Volume'],2) . "</td><td>" . $row['Kilo_Vol'] . "</td><td>" . $row['Sales_Year'] . "</td><td>" . $row['Nielsen_Category'] . "</td><td>" . $row['Source'] . "</td></tr>";                       
		
	
	


$conn->close();
?>