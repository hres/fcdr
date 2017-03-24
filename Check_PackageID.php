 <?php
	include "connection.php";

	$PackageID = ($_GET['PackageID']?$_GET['PackageID']:'');

	if(!filter_var($PackageID, FILTER_VALIDATE_INT) === false){

	$check_package =<<<EOQ
		Select PackageID from Package  where PackageID = ?
EOQ;

							$stmt = $conn->prepare($check_package);
					     	$stmt->bind_param("i",$PackageID);
							$stmt->execute();
						$stmt->store_result();
					if (($stmt->num_rows) < 1 ){
	                        header ('Location: error404.php');

	 
					}}else{

                        header ('Location: error404.php');
					}
	 
	 
	  ?>