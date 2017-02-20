<?php include '../connection.php';?>
<?php
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');
$tableau = array();
$tableau["error"] = "<div class=\"error\" style=\"color:#FF0000;\">Try again<div>";

//$tableau["error"] = $_FILES['file_save']['name'];   //tmp_name

$image = addslashes(file_get_contents($_FILES['file_save']['tmp_name']));

$image_name = addslashes($_FILES['file_save']['name']);

$ext = pathinfo($image_name, PATHINFO_EXTENSION);
				
$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $image_name);



	$query2 = "Insert into Images (Image, ImageName,LabelID,Extension) VALUES ('$image', '$withoutExt', $PackageID,'$ext')";	 
	$result2 = mysqli_query($conn,$query2);


 if($result2){
    //echo "You have successfully added your image, reload the page please";

    	$tableau["error"] = "No";
		$tableau["success"] = "<div class=\"success\"  style=\"color: #00b300; padding:25px;\">You have successfully added your image, reload the page please</div>";	
		
 } else{
     $tableau["errorPassword"] = "<div class=\"error\" style=\"color:#FF0000;\"> Failed to add your image</div>";
     // echo " $query2 <br> Failed to add your image";
 }



				
echo json_encode($tableau);


?>

