<?php include 'connection.php';?>
<?php

							

	$query2 =  "Delete from $dbname.Sales where SalesID > 0"; 	
	$result = mysqli_query($conn,$query2);	
	
	$xquery = "ALTER TABLE Sales MODIFY Sales_UPC Sales_UPC";
		$query3 =  "Delete from $dbname.Product_Component where ComponentID > 0"; 	
		$result3 = mysqli_query($conn,$query3);	
	
			$query4 =  "Delete from $dbname.Images where ImageID > 0"; 	
		$result4 = mysqli_query($conn,$query4);	
	
				$query5 =  "Delete from $dbname.Package where PackageID > 0"; 	
		$result5 = mysqli_query($conn,$query5);	
		
						$query6 =  "Delete from $dbname.Product_Classification where ProductID > 0"; 	
		$result6 = mysqli_query($conn,$query6);	
	
	
		$query =  "Delete from $dbname.Product where ProductID > 0"; 	
		$result7 = mysqli_query($conn,$query);	
	echo "Database Cleared out";

							


$conn->close();
?>