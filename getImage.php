
<?php include 'connection.php';?>

<?php
$PackageID = $_GET['PackageID'];
$query = "Select * from $dbname.Images where LabelID = $PackageID";

$result = mysqli_query($conn,$query);

  
  $count = 0;
 	   echo " <div class=\"row\">"; 
   while($row = $result->fetch_assoc()) {
	   $ext = $row['Extension'];
	  $ImageID=$row['ImageID'];
	   if(($count%3) ==0){
		echo "</div>";
		 echo " <div class=\"row\">"; 
		   
		    echo "  <div class=\"col-sm-2\">";
			echo " <a href=\"viewimage.php?ImageID=$ImageID\" class=\"thumbnail\" target = '_blank'>";
			echo '<img id=\"myImg\" src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'" style=\"width:130px;height:130px\"/>';
			echo"</a></div>";	   
		   
		 
		++$count;
		   
	   }else{
		   	    echo "  <div class=\"col-sm-2\">";
			echo " <a href=\"viewimage.php?ImageID=$ImageID\" class=\"thumbnail\" target = '_blank'>>";
			echo '<img id=\"myImg\" src="data:image/$ext;base64,'.base64_encode( $row['Image'] ).'" style=\"width:130px;height:130px\"/>';
			echo"</a></div>";
			++$count;
		   
	   }
	  
   }
 echo "</div>" ;



?>