 <?php
	include "connection.php";

	$PID = ($_GET['ProductID']?$_GET['ProductID']:'');

	if(!filter_var($PID, FILTER_VALIDATE_INT) === false){

	$fill_product =<<<EOQ
		Select ProductID from Product  where ProductID = ?
EOQ;

							$stmt = $conn->prepare($fill_product);
					     	$stmt->bind_param("i",$PID);
							$stmt->execute();
						$stmt->store_result();
					if (($stmt->num_rows) < 1 ){
	                        header ('Location: error404.php');

	 
					}}else{

                        header ('Location: error404.php');
					}
	 
	 
	  ?>