

<?php include 'connection.php';?>

<?php


$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');


		if(isset($_POST['search'])) {
$des = mysqli_real_escape_string($conn,$_POST['Description']);
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
			$Product_Grouping = mysqli_real_escape_string($conn,$_POST['Product_Grouping']);
			
			
$query="UPDATE  $dbname.Sales SET Dollar_Volume='$Dollar_Volume',Kilo_Vol='$kilo_vol',Sales_Year='$Sales_Year',
		Nielsen_Category = '$Nielsen_Category', Source = '$Source', Sales_Description ='$Sales_Description', 
		Comments='$Comments',Collection_Date='$Collection_Date',
		Brand = '$Brand', Dollar_Rank = '$Dollar_Rank', Dollar_Volume_PerCentage_Change = '$Dollar_Volume_PerCentage_Change', 
		Kilo_Volume_Percent_Change = '$Kilo_Volume_Percent_Change',
 		Average_AC_Dist = '$Average_AC_Dist', Average_Retail_Price='$Average_Retail_Price',
 		Dollar_Volume_Total='$Dollar_Volume_Total', Kilo_Volume_Total='$Kilo_Volume_Total',
		Control_Label_Flag ='$Control_Label_Flag', Dollar_Share = '$Dollar_Share',
		Cluster_Number ='$Cluster_Number', Product_Grouping = '$Product_Grouping',
 		Kilo_Share = '$Kilo_Share' WHERE SalesID='$salesID'";
		
$sql = "Select * from $dbname.Sales WHERE SalesID='$salesID'";
	
	$result = mysqli_query($conn,$query);
	$result1 = mysqli_query($conn,$sql);
	
	$row = $result1->fetch_assoc();
	$pid= $row['ProductID'];
if (!$result) {
		echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message2\"). innerHTML = \"<h3><strong>Failed to updated Market share</strong></h3>\";</script>";

}else {
		echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Market Share Successfully updated. Redirecting to the previous page...</strong></h3>\";</script>";
		echo "<script>setTimeout(\"location.href = 'sales_details.php?SalesID=$salesID';\",3000);</script>";


}

}
$conn->close();
?>
