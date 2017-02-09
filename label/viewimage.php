<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php include 'connection.php';?>

<?php
$ImageID = $_GET['ImageID'];



		$view_image=<<<EOQ
		SELECT * FROM Images
		WHERE ImageID = ?

EOQ;

							$stmt = $conn->prepare($view_image);
					     	$stmt->bind_param("i",$ImageID);
							$result1 = $stmt->execute();	
							$result = $stmt->get_result();									
							
	
	

 
$row = $result->fetch_assoc();
$ext = $row['Extension'];
echo '<img src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'"/>';





?>




</body>
</html>
