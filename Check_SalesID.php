 <?php
	include "connection.php";

	$SalesID = ($_GET['SalesID']?$_GET['SalesID']:'');

	if(!filter_var($SalesID, FILTER_VALIDATE_INT) === false){

	$check_sales =<<<EOQ
		Select SalesID from Sales  where SalesID = ?
EOQ;

							$stmt = $conn->prepare($check_sales);
					     	$stmt->bind_param("i",$SalesID);
							$stmt->execute();
						$stmt->store_result();
					if (($stmt->num_rows) < 1 ){
	                        header ('Location: error404.php');

	 
					}}else{

                        header ('Location: error404.php');
					}
	 
	 
	  ?>