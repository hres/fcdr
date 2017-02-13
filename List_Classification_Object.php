<?php include 'connection.php';?>
<?php
$list_classification =<<<EOQ
SELECT Classification_Name, Classification_Number
  FROM Classification
EOQ;
$stmt = $conn->prepare($list_classification);
$result1 = $stmt->execute();
$result = $stmt->get_result();
if (!$result) {
	echo "An error occured";
}
echo '<script type="text/javascript">';
echo '    $(document).ready(function() {';
echo '        classificationItem = Array();';
while($row = $result->fetch_assoc()) {
	echo "        classificationItem[" . $row['Classification_Number'] ."] = '". $row['Classification_Name'] ."';";
}
echo '    });';
echo '</script>';
$conn->close();
?>
