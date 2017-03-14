

<?php include 'connection.php';?>

<?php


$salesID = ($_GET['SalesID']?$_GET['SalesID']:'');
$Username = $_SESSION['currentuser'];

if (isset($_POST['search'])) {

	error_reporting(E_ALL);
	ini_set('display_errors', 1);


	$_POST['Collection_Date']=  (empty($_POST['Collection_Date']) && strlen($_POST['Collection_Date']) == 0 ?NULL :$_POST['Collection_Date']);
	$_POST['Dollar_Volume']=  (empty($_POST['Dollar_Volume']) && strlen($_POST['Dollar_Volume']) == 0 ?NULL :$_POST['Dollar_Volume']);
	$_POST['Kilo_Vol']=  (empty($_POST['Kilo_Vol']) && strlen($_POST['Kilo_Vol']) == 0 ?NULL :$_POST['Kilo_Vol']);
	$_POST['Sales_Year']=  (empty($_POST['Sales_Year']) && strlen($_POST['Sales_Year']) == 0 ?NULL :$_POST['Sales_Year']);
	$_POST['Dollar_Rank']=  (empty($_POST['Dollar_Rank']) && strlen($_POST['Dollar_Rank']) == 0 ?NULL :$_POST['Dollar_Rank']);
	$_POST['Dollar_Volume_PerCentage_Change']=  (empty($_POST['Dollar_Volume_PerCentage_Change']) && strlen($_POST['Dollar_Volume_PerCentage_Change']) == 0 ?NULL :$_POST['Dollar_Volume_PerCentage_Change']);
	$_POST['Kilo_Volume_Percent_Change']=  (empty($_POST['Kilo_Volume_Percent_Change']) && strlen($_POST['Kilo_Volume_Percent_Change']) == 0 ?NULL :$_POST['Kilo_Volume_Percent_Change']);
	$_POST['Average_AC_Dist']=  (empty($_POST['Average_AC_Dist']) && strlen($_POST['Average_AC_Dist']) == 0 ?NULL :$_POST['Average_AC_Dist']);
	$_POST['Average_Retail_Price']=  (empty($_POST['Average_Retail_Price']) && strlen($_POST['Average_Retail_Price']) == 0 ?NULL :$_POST['Average_Retail_Price']);
	$_POST['Dollar_Volume_Total']=  (empty($_POST['Dollar_Volume_Total']) && strlen($_POST['Dollar_Volume_Total']) == 0 ?NULL :$_POST['Dollar_Volume_Total']);

	$_POST['Kilo_Volume_Total']=  (empty($_POST['Kilo_Volume_Total']) && strlen($_POST['Kilo_Volume_Total']) == 0 ?NULL :$_POST['Kilo_Volume_Total']);
	$_POST['Dollar_Share']=  (empty($_POST['Dollar_Share']) && strlen($_POST['Dollar_Share']) == 0 ?NULL :$_POST['Dollar_Share']);
	$_POST['Cluster_Number']=  (empty($_POST['Cluster_Number']) && strlen($_POST['Cluster_Number']) == 0 ?NULL :$_POST['Cluster_Number']);

	$_POST['Product_Grouping']=  (empty($_POST['Product_Grouping']) && strlen($_POST['Product_Grouping']) == 0 ?NULL :$_POST['Product_Grouping']);
	$_POST['Kilo_Share']=  (empty($_POST['Kilo_Share']) && strlen($_POST['Kilo_Share']) == 0 ?NULL :$_POST['Kilo_Share']);
	$_POST['Kilo_Rank']=  (empty($_POST['Kilo_Rank']) && strlen($_POST['Kilo_Rank']) == 0 ?NULL :$_POST['Kilo_Rank']);
	$_POST['Classification_Type']=  (empty($_POST['Classification_Type']) && strlen($_POST['Classification_Type']) == 0 ?NULL :$_POST['Classification_Type']);
	$_POST['Classification_Number']=  (empty($_POST['Classification_Number']) && strlen($_POST['Classification_Number']) == 0 ?NULL :$_POST['Classification_Number']);

	$param = array(

		preg_replace('/[^\d.]/', '', $_POST['Dollar_Volume']),
		preg_replace('/[^\d.]/', '', $_POST['Kilo_Vol']),
		$_POST['Sales_Year'],
		$_POST['Nielsen_Category'],
		$_POST['Source'],
		$_POST['Sales_Description'],
		$_POST['Comments'],
		$_POST['Collection_Date'],
		$_POST['Brand'],
		preg_replace('/[^\d.]/', '', $_POST['Dollar_Rank']),
		preg_replace('/[^\d.]/', '', $_POST['Dollar_Volume_PerCentage_Change']),
		preg_replace('/[^\d.]/', '', $_POST['Kilo_Volume_Percent_Change']),
		preg_replace('/[^\d.]/', '', $_POST['Average_AC_Dist']),
		preg_replace('/[^\d.]/', '', $_POST['Average_Retail_Price']),
		preg_replace('/[^\d.]/', '', $_POST['Dollar_Volume_Total']),
		preg_replace('/[^\d.]/', '', $_POST['Kilo_Volume_Total']),
		$_POST['Control_Label_Flag'],
		preg_replace('/[^\d.]/', '', $_POST['Dollar_Share']),
		$_POST['Cluster_Number'],
		$_POST['Product_Grouping'],
		preg_replace('/[^\d.]/', '', $_POST['Kilo_Share']),
		preg_replace('/[^\d.]/', '', $_POST['Kilo_Rank']),
		$_POST['Manufacturer'],
		$_POST['Classification_Number'],
		$_POST['Classification_Type']
	);


	$query =<<<EOQ
UPDATE Sales SET
	   Dollar_Volume = ?,
	   Kilo_Vol = ?,
	   Sales_Year = ?,
	   Nielsen_Category = ?,
	   Source = ?,
	   Sales_Description = ?,
	   Comments = ?,
	   Collection_Date = ?,
	   Brand = ?,
	   Dollar_Rank = ?,
	   Dollar_Volume_PerCentage_Change = ?,
	   Kilo_Volume_Percent_Change = ?,
	   Average_AC_Dist = ?,
	   Average_Retail_Price = ?,
	   Dollar_Volume_Total = ?,
	   Kilo_Volume_Total = ?,
	   Control_Label_Flag = ?,
	   Dollar_Share = ?,
	   Cluster_Number = ?,
	   Product_Grouping = ?,
	   Kilo_Share = ?,
	   Kilo_Rank = ?,
	   Manufacturer = ?,
	   Classification_Number = ?,
	   Classification_Type = ?,
	   Last_Edited_by = ?
WHERE SalesID = ?
EOQ;

	$stmt = $conn->prepare($query);

	$stmt->bind_param("ddissssssdddddddsddsddsdssi", $param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21],$param[22],$param[23],$param[24],$Username,$salesID);

	$result = $stmt->execute();

	if (!$result) {

		echo "<script type=\"text/javascript\">\n";
		echo "$(document).ready(function() {\n";
		echo "	document.getElementById (\"confirm-message2\").innerHTML = \"<h3><strong>Failed to updated Market share</strong></h3>\";\n";
		echo "});\n";
		echo "</script>";

	} else {
		echo "<script type=\"text/javascript\">\n";
		echo "$(document).ready(function() {\n";
		echo "	document.getElementById (\"confirm-message\").style.display =  \"block\"\n";
		echo "});\n";
		echo "</script>\n";
		echo "<script type=\"text/javascript\">\n";
		echo "$(document).ready(function() {\n";
		echo "	document.getElementById (\"confirm-message\").innerHTML += \"<h3><strong>Market Share Successfully updated. Redirecting to the previous page..</strong></h3>\";\n";
		echo "});\n";
		echo "</script>\n";
		echo "<script>setTimeout(\"location.href = 'sales_details.php?SalesID=$salesID';\",3000);</script>";
	}
}
$conn->close();
?>
