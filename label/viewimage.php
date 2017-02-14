<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
	</script>  

<link  href="../viewer.css" rel="stylesheet">
<script src="../viewer.js"></script>
</head>
<body>

<?php include '../connection.php';?>

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
echo '<a id="image"><img class = \"image\" src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'"/></a>';





?>

<script>

$(document).ready(function() {
	console.log("OYESSOOO");
   $('#image').on('click',function(){
 $('.image').viewer();

   });
   
});

</script>


</body>
</html>
