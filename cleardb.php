<?php include 'connection.php';?>
<?php

	$xllquery =  "Insert INTO Unit_Of_Measure (UofM_Name) VALUE ('kg')"	;	
	$xllquery2 =  "Insert INTO Unit_Of_Measure (UofM_Name) VALUE ('RE')";		
	
	$xllquery3 =  "Insert INTO Unit_Of_Measure (UofM_Name) VALUE ('mL')";	
	$xllquery23 =  "Insert INTO Unit_Of_Measure (UofM_Name) VALUE ('L')";	
	
		$xllquery4 =  "Insert INTO Unit_Of_Measure (UofM_Name) VALUE ('µg')";	
	$resultxx = mysqli_query($conn,$xllquery);	
	$resultxy = mysqli_query($conn,$xllquery2);	

	$resultxxx = mysqli_query($conn,$xllquery3);	
	$resultxxy = mysqli_query($conn,$xllquery23);	
		$resultxx33 = mysqli_query($conn,$xllquery4);	

	
 
/* 
	$query2 =  "Delete from $dbname.Sales where SalesID > 0"; 	
	$result = mysqli_query($conn,$query2);	
	

	
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

		 */					


$conn->close();
?>