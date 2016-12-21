<?php include 'connection.php';?>
<?php




$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


		if(isset($_POST['search'])) {

			
			$Sales_UPC = mysqli_real_escape_string($conn,$_POST['Sales_UPC']);

			$Dollar_Volume = mysqli_real_escape_string($conn,$_POST['Dollar_Volume']);
			$kilo_vol = mysqli_real_escape_string($conn,$_POST['Kilo_Vol']);
			
			$Sales_Year = mysqli_real_escape_string($conn,$_POST['Sales_Year']);
			$Nielsen_Category = mysqli_real_escape_string($conn,$_POST['Nielsen_Category']);
			$Source = mysqli_real_escape_string($conn,$_POST['Source']);
			$Sales_Description = mysqli_real_escape_string($conn,$_POST['Sales_Description']);
			$Comments = mysqli_real_escape_string($conn,$_POST['Comments']);
			
			$Collection_Date = mysqli_real_escape_string($conn,$_POST['Collection_Date']);
			$Brand = mysqli_real_escape_string($conn,$_POST['Brand']);
			$Dollar_Rank =mysqli_real_escape_string($conn,$_POST['Dollar_Rank']);
			$Dollar_Volume_PerCentage_Change = mysqli_real_escape_string($conn,$_POST['Dollar_Volume_PerCentage_Change']);
			$Kilo_Volume_Percent_Change = mysqli_real_escape_string($conn,$_POST['Kilo_Volume_Percent_Change']);
			$Average_AC_Dist = mysqli_real_escape_string($conn,$_POST['Average_AC_Dist']);
			$Average_Retail_Price = mysqli_real_escape_string($conn,$_POST['Average_Retail_Price']);
			$Dollar_Volume_Total = mysqli_real_escape_string($conn,$_POST['Dollar_Volume_Total']);
			$Kilo_Volume_Total =mysqli_real_escape_string($conn,$_POST['Kilo_Volume_Total']);
			$Control_Label_Flag = mysqli_real_escape_string($conn,$_POST['Control_Label_Flag']);
			$Dollar_Share = mysqli_real_escape_string($conn,$_POST['Dollar_Share']);
			$Kilo_Share = mysqli_real_escape_string($conn,$_POST['Kilo_Share']);
			$Cluster_Number = mysqli_real_escape_string($conn,$_POST['Cluster_Number']);
			
			$query2 = "Select * from $dbname.Sales where Sales_UPC = $Sales_UPC AND ProductIDS <> '$productID'"; 
			$result2 = mysqli_query($conn,$query2);
			
			$rowcount=mysqli_num_rows($result2);
			if($rowcount>0){
				echo "UPC10 Code already belongs to a different product ";
				
				
			}else{
			
			
			$query="INSERT INTO  $dbname.Sales (SalesID, ProductIDS, Sales_UPC, Dollar_Volume, Kilo_Vol, Sales_Year, Nielsen_Category,
			Source, Sales_Description, Comments,Collection_Date,Brand,Dollar_Rank,Dollar_Volume_PerCentage_Change,Kilo_Share,Average_AC_Dist,Average_Retail_Price,			
			Dollar_Volume_Total,Kilo_Volume_Total,Control_Label_Flag, Dollar_Share,  Cluster_Number) 
			VALUES (NULL,'$productID','$Sales_UPC', '$Dollar_Volume', '$kilo_vol', '$Sales_Year', '$Nielsen_Category',
			'$Source', '$Sales_Description', '$Comments','$Collection_Date',
			'$Brand','$Dollar_Rank','$Dollar_Volume_PerCentage_Change','$Kilo_Share','$Average_AC_Dist','$Average_Retail_Price',
			'$Dollar_Volume_Total','$Kilo_Volume_Total','$Control_Label_Flag', '$Dollar_Share', '$Cluster_Number')";	
			
			$result = mysqli_query($conn,$query);


		
	
	
if (!$result ) {
    echo "ERRORS $query";
	
}else {

	echo "Success... ";
echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";
//header("Location: edit_product.php?ProductID=$productID");
}

		}
		
		}
$conn->close();
?>


<?php

include 'connection.php';

$productID = ($_GET['ProductID']?$_GET['ProductID']:'');


if (isset($_POST['search'])) {
/* 	error_reporting(E_ALL);
	ini_set('display_errors', 1); */

	$Sales_UPC                       = $_POST['Sales_UPC'];
	$Dollar_Volume                   = $_POST['Dollar_Volume'];
	$kilo_vol                        = $_POST['Kilo_Vol'];
	$Sales_Year                      = $_POST['Sales_Year'];
	$Nielsen_Category                = $_POST['Nielsen_Category'];
	$Source                          = $_POST['Source'];
	$Sales_Description               = $_POST['Sales_Description'];
	$Comments                        = $_POST['Comments'];
	$Collection_Date                 = $_POST['Collection_Date'];
	$Brand                           = $_POST['Brand'];
	$Dollar_Rank                     = $_POST['Dollar_Rank'];
	$Dollar_Volume_PerCentage_Change = $_POST['Dollar_Volume_PerCentage_Change'];
	$Kilo_Volume_Percent_Change      = $_POST['Kilo_Volume_Percent_Change'];
	$Average_AC_Dist                 = $_POST['Average_AC_Dist'];
	$Average_Retail_Price            = $_POST['Average_Retail_Price'];
	$Dollar_Volume_Total             = $_POST['Dollar_Volume_Total'];
	$Kilo_Volume_Total               = $_POST['Kilo_Volume_Total'];
	$Control_Label_Flag              = $_POST['Control_Label_Flag'];
	$Dollar_Share                    = $_POST['Dollar_Share'];
	$Kilo_Share                      = $_POST['Kilo_Share'];
	$Cluster_Number                  = $_POST['Cluster_Number'];

/* 	$query2 =<<<EOQ
SELECT *
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;

	$stmt = $conn->prepare($query2);
	$stmt->bind_param("i", $Sales_UPC);
	$result2 = $stmt->execute();
		$stmt->store_result(); */

						//if (($stmt->num_rows) > 0) {
	// $result2 = mysqli_query($conn,$query2);

	//$rowcount = mysqli_num_rows($result2);
	

		$param = array(
			$productID,
			$Sales_UPC,
			$Dollar_Volume,
			$kilo_vol,
			$Sales_Year,
			$Nielsen_Category,
			$Source,
			$Sales_Description,
			$Comments,
			$Collection_Date,
			$Brand,
			$Dollar_Rank,
			$Dollar_Volume_PerCentage_Change,
			$Kilo_Share,
			$Average_AC_Dist,
			$Average_Retail_Price,
			$Dollar_Volume_Total,
			$Kilo_Volume_Total,
			$Control_Label_Flag,
			$Dollar_Share,
			$Cluster_Number
		);

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
       Kilo_Share,
       Average_AC_Dist,
       Average_Retail_Price,
       Dollar_Volume_Total,
       Kilo_Volume_Total,
       Control_Label_Flag,
       Dollar_Share,
       Cluster_Number
)
VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOQ;

		
		$stmt = $conn->prepare($query);
		$stmt->bind_param("iiddissssssdddddddsdi", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20]);
		$result = $stmt->execute();

print $stmt->error; 


		if (!$result ) {
			echo "ERRORS";
		} else {
			echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",200);</script>";
		}
	
}
$conn->close();

?>
