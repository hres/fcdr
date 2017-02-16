<?php include '../connection.php';?>
<?php
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');

$tableau = [];
$tableau["error"] = $_FILES['file_save']['name'];   //tmp_name

$image = addslashes(file_get_contents($_FILES['file_save']['tmp_name']));

$image_name = addslashes($_FILES['file_save']['name']);

$ext = pathinfo($image_name, PATHINFO_EXTENSION);
				
$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $image_name);





 $query = "Select Label_UPC from Package Where PackageID = $PackageID";
	$result = mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
$Label_UPC = $row['Label_UPC'];
	$query2 = "Insert into Images (Image, ImageName,LabelID,Extension) VALUES ('$image', '$Label_UPC', $PackageID,'$ext')";	 
	$result2 = mysqli_query($conn,$query2);


 if($result2){
    echo "You have successfully add your image, reload the page please";
 } else{
      echo " $query2 <br> Failed to add your image";
 }



    if ( 0 < $_FILES['file_save']['error'] ) {
     
        echo  'Error :  ' . $_FILES['file_save']['error'] . '<br>';
    }else{
if($result){

}
}

				
//echo json_encode($tableau);


?>

