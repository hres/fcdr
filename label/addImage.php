<?php include '../connection.php';?>
<?php
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 

$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');

$tableau = [];
$tableau["error"] = $_FILES['file']['name'];   //tmp_name

$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
$image_name = addslashes($_FILES['file']['name']);

$ext = pathinfo($image_name, PATHINFO_EXTENSION);
				
$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $image_name);

$get_UPC =<<<EOQ
SELECT Label_UPC
  FROM Package 
  WHERE PackageID = ?
EOQ;
 $stmt_query = $conn->prepare($get_UPC);   //$PackageID
  $stmt_query->bind_param("i",$PackageID); 
$result =  $stmt_query->execute();      
  $stmt_query->bind_result($Label_UPC);                          
 $stmt_query->fetch();



    if ( 0 < $_FILES['file']['error'] ) {
        echo $image . "" .$ext ;
        echo  'Error :  ' . $_FILES['file']['error'] . '<br>';
    }else{
if($result){

    
	$query2 = "Insert into $dbname.Images (Image, ImageName,LabelID,Extension) VALUES ('$image', '$Label_UPC', '$PackageID','$ext')";	 
	$result2 = mysqli_query($conn,$query2);

/*
      echo $image . "" .$ext ;
$insert_image =<<<EOQ
 Insert INTO Images (
                Image, 
                ImageName,
                LabelID,
                Extension
                )
     VALUES  (?, ?, ?, ?)           
EOQ;
 $stmt_insert= $conn->prepare($insert_image);s
   $stmt_insert->bind_param("bsis",$image, $Label_UPC, $PackageID, $ext); 
*/

 if($result2){
    echo "You have successfully add your image, reload the page please";
 } else{
      echo " $query2 <br> Failed to add your image";
 }

}
}

				
//echo json_encode($tableau);


?>