<?php include '../connection.php';?>

<?php

$SalesID = ($_GET['SalesID']?$_GET['SalesID']:'');
				

		$view_sales =<<<EOQ
		SELECT * FROM Sales P
		WHERE P.SalesID = ?

EOQ;

							$stmt = $conn->prepare($view_sales);
					     	$stmt->bind_param("i",$SalesID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();									
							
	
	
									
									
							
							

if (!$result1) {
    echo "ERRORS";
}
	
$row = $result->fetch_assoc();
//$row['Dollar_Volume'] = is_float($row['Dollar_Volume'])? $row['Dollar_Volume']: number_format($row['Dollar_Volume']);
		//is_float 
		 echo "<tr><td>" . $row['Sales_UPC'] . "</td><td>$" . number_format($row['Dollar_Volume'],2) . "</td><td>" . number_format($row['Kilo_Vol']) . "</td><td>" . $row['Sales_Year'] . "</td><td>" . $row['Nielsen_Category'] . "</td><td>" . $row['Source'] . "</td></tr>";                       
		
	
	


$conn->close();
?>