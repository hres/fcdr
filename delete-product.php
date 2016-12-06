<?php include 'connection.php';?>


<?php

$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['delete-product'])) {
			
			$query = "Delete From $dbname.Product_Classification where ProductID = $productID"; 
			$result = mysqli_query($conn,$query);
			$query1 = "Delete From $dbname.Sales where ProductIDS = $productID"; 
			$result1 = mysqli_query($conn,$query1);
			$query2 = "Delete From $dbname.Product_Component where PackageID IN (Select PackageID from Package where ProductIDP = $productID)";
			$result2 = mysqli_query($conn,$query2);
			
			$queryX = "Delete from $dbname.Images where LabelID IN (Select PackageID from Package where ProductIDP = $productID)"; 
			$resultX = mysqli_query($conn,$queryX);
			$query3 = "Delete from $dbname.Package where ProductIDP = $productID"; 
			$result3 = mysqli_query($conn,$query3);
			$query4 = "Delete from $dbname.Product where ProductID = $productID";
			$result4 = mysqli_query($conn,$query4);
			
			if (!$result or !$result1 or !$result2 or !$result3 or !$result4) {
    echo "failed to delete the product $query $query1 $query2 $query3 $query4 ";
	echo $query;

	}else{
		echo"<script>document.getElementById(\"deletemess\").innerHTML = \"<h3><strong>Product was successfully deleted, redirecting to the home page...</strong></h3>\" </script>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

	
}

		
		}
$conn->close();
?>
