<?php include 'connection.php';?>

<?php


$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


if (isset($_POST['search'])) {

		$param = array(
			$productID,
			$_POST['Sales_UPC'],
			$_POST['Dollar_Volume'],
			$_POST['Kilo_Vol'],
			$_POST['Sales_Year'],
			$_POST['Nielsen_Category'],
			$_POST['Source'],
			$_POST['Sales_Description'],
			$_POST['Comments'],
			$_POST['Collection_Date'],
			$_POST['Brand'],
			$_POST['Dollar_Rank'],
			$_POST['Dollar_Volume_PerCentage_Change'],
			$_POST['Kilo_Volume_Percent_Change'],			
			$_POST['Kilo_Share'],
			$_POST['Average_AC_Dist'],
			$_POST['Average_Retail_Price'],
			$_POST['Dollar_Volume_Total'],
			$_POST['Kilo_Volume_Total'],
			$_POST['Control_Label_Flag'],
			$_POST['Dollar_Share'], 
			$_POST['Cluster_Number']
		);



	$query2 = "Select * from $dbname.Sales where Sales_UPC = $Sales_UPC AND ProductIDS <> '$productID'"; 
			$result2 = mysqli_query($conn,$query2);
			
			$rowcount=mysqli_num_rows($result2);
			if($rowcount>0){
				echo "UPC10 Code already belongs to a different product ";
				
				
			}else{
		$query =<<<EOQ
INSERT INTO Sales (
       SalesID,
       ProductIDS,
       Sales_UPC,
       Dollar_Volume,
       Kilo_Vol,
       Sales_Year,
       Nielsen_Category,
       Source,
       Sales_Description,
       Comments,
       Collection_Date,
       Brand,
       Dollar_Rank,
       Dollar_Volume_PerCentage_Change,
	   Kilo_Volume_Percent_Change,
       Kilo_Share,
       Average_AC_Dist,
       Average_Retail_Price,
       Dollar_Volume_Total,
       Kilo_Volume_Total,
       Control_Label_Flag,
       Dollar_Share,
       Cluster_Number
)
VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOQ;

	
		$stmt = $conn->prepare($query);

		$stmt->bind_param("iiddissssssddddddddsdi", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21]);
	
	$result = $stmt->execute();



		if (!$result ) {
			echo "ERRORS";
		} else {
			echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";
		}
	}
}
$conn->close();

?>
