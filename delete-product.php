<?php include 'connection.php';?>


<?php

$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['delete-product'])) {


$delete_classification =<<<EOQ
		Delete from Product_Classification
		where ProductID = ?


EOQ;

							$stmt_classification = $conn->prepare($delete_classification);
					     	$stmt_classification->bind_param("i",$productID);
							$result = $stmt_classification->execute();



$delete_sales =<<<EOQ
		Delete from Sales
		where ProductIDS = ?


EOQ;

							$stmt_sales = $conn->prepare($delete_sales);
					     	$stmt_sales->bind_param("i",$productID);
							$result1 = $stmt_sales->execute();



		//	$query2 = "Delete From $dbname.Product_Component where PackageID IN (Select PackageID from Package where ProductIDP = $productID)";
			//$result2 = mysqli_query($conn,$query2);

$delete_component =<<<EOQ
		Delete from Product_Component
		where PackageID IN (Select PackageID from Package where ProductIDP = ?)


EOQ;

							$stmt_component = $conn->prepare($delete_component);
					     	$stmt_component->bind_param("i",$productID);
							$result2 = $stmt_component->execute();





			//$queryX = "Delete from $dbname.Images where LabelID IN (Select PackageID from Package where ProductIDP = $productID)"; 
			//$resultX = mysqli_query($conn,$queryX);

$delete_images =<<<EOQ
		Delete from Images
		where LabelID IN (Select PackageID from Package where ProductIDP = ?)


EOQ;

							$stmt_images = $conn->prepare($delete_images);
					     	$stmt_images->bind_param("i",$productID);
							$resultX = $stmt_images->execute();





			//$query3 = "Delete from $dbname.Package where ProductIDP = $productID"; 
			//$result3 = mysqli_query($conn,$query3);

$delete_package =<<<EOQ
		Delete from Package
		where ProductIDP = ?


EOQ;

							$stmt_label = $conn->prepare($delete_package);
					     	$stmt_label->bind_param("i",$productID);
							$result3 = $stmt_label->execute();




			//$query4 = "Delete from $dbname.Product where ProductID = $productID";
			//$result4 = mysqli_query($conn,$query4);


$delete_product =<<<EOQ
		Delete from Product
		where ProductID = ?


EOQ;

							$stmt_product = $conn->prepare($delete_product);
					     	$stmt_product->bind_param("i",$productID);
							$result4 = $stmt_product->execute();




			if (!$result or !$result1 or !$result2 or !$result3 or !$result4) {
			echo"<script>document.getElementById(\"deletemess\").innerHTML = \"<h3><strong>failed to delete the product </strong></h3>\" </script>";

	

	}else{
		echo"<script>document.getElementById(\"deletemess\").innerHTML = \"<h3><strong>Product was successfully deleted, redirecting to the home page...</strong></h3>\" </script>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";

	
}

		
		}
$conn->close();
?>
