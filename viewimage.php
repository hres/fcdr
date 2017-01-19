<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript">
      function resizeImg (img)
      {
        var resize = 150; // resize amount in percentage
        var origH  = 61;  // original image height
        var origW  = 250; // original image width
        var mouseX = event.x;
        var mouseY = event.y;
        var newH   = origH * (resize / 100);
        var newW   = origW * (resize / 100);

        // Set the new width and height
        img.style.height = newH;
        img.style.width  = newW;

        var c = img.parentNode;

        // Work out the new center
        c.scrollLeft = (mouseX * (resize / 100)) - (newW / 2) / 2;
        c.scrollTop  = (mouseY * (resize / 100)) - (newH / 2) / 2;
      }
    </script>
    <style type="text/css">
      #Container {
        position:relative;
        width:250px;
        height:61px;
        overflow:hidden;
      }
    </style>

</head>
<body>

<?php include 'connection.php';?>

<?php
$ImageID = $_GET['ImageID'];
$query = "Select * from $dbname.Images where ImageID = $ImageID";

$result = mysqli_query($conn,$query);

 
$row = $result->fetch_assoc();
$ext = $row['Extension'];
  echo "<div id=\"Container\">"; 
echo '<img src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'" onclick=\"resizeImg(this)\"/>';

echo "</div>";



?>




</body>
</html>
