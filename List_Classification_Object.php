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
echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";
echo "        classificationItem = Array();\n";
while($row = $result->fetch_assoc()) {
	echo "        classificationItem[" . $row['Classification_Number'] ."] = '". $row['Classification_Name'] ."';\n";
}
echo "        $('#Classification_Number').on('change', function() {\n";
echo "            $('#Classification_Name').val(classificationItem[$('#Classification_Number').selectedIndex]);\n";
echo "        }\n";
echo "    });\n";
echo "</script>\n";
$conn->close();
?>