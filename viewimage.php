


<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../dist/viewer.css"/>
	
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../dist/viewer.js"></script>

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
echo ' <div style="text-align:center"><img class = "image" width="700" src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'"/></div>';





?>






		<script>
			$(document).ready(function() {
				$('.image').viewer();
				$('.images').viewer();
			});
		</script>
		
	</body>
</html>
