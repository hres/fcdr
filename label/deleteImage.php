<?php include '../connection.php';?>
<?php
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 


	if(isset($_POST['delete-label'])) {

$ImageID = ($_GET['ImageID']?$_GET['ImageID']:'');


$delete_image =<<<EOQ
		Delete from Images
		where ImageID = ?


EOQ;

							$stmt = $conn->prepare($delete_image);
					     	$stmt->bind_param("i",$ImageID);
							$result = $stmt->execute();
			if (!$result ) {
    echo "Failed to delete this image please try again";

}else{
	echo "<h3>Image was successfully deleted, close this window</h3>";
	

	
}

    }




?>