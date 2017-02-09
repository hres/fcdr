<?php include '../connection.php';?>

<?php

$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');
	
					
							
	$view_sales =<<<EOQ
		SELECT * FROM Sales P
		WHERE P.ProductIDS = ?

EOQ;

							$stmt = $conn->prepare($view_sales);
					     	$stmt->bind_param("i",$ProductID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();									
							
	
	
									
							

if (!$result1) {
    echo "ERRORS";
}
	
	while($row = $result->fetch_assoc())  {
	
		 echo "<tr><td><a href=sales_details.php?ProductID=$ProductID&SalesID=" .$row['SalesID'] . ">" . $row['Sales_UPC'] . "</a></td> <td>" . $row['Sales_Description'] . "</td><td>" . $row['Dollar_Volume'] . "</td><td>" . $row['Kilo_Vol'] . "</td><td>" . $row['Sales_Year'] . "</td><td>" . $row['Nielsen_Category'] . "</td><td>" . $row['Source'] . "</td></tr>";                       
		
	 }
	


$conn->close();
?>