<?php include 'connection.php';?>

<?php




$Username = $_SESSION['currentuser'];
$productID = ($_GET['ProductID']?$_GET['ProductID']:'');

if(isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {

	$_POST['Cluster_Number'] =  (empty($_POST['Cluster_Number']) && strlen($_POST['Cluster_Number']) == 0 ?NULL :(int)$_POST['Cluster_Number']);		
	$_POST['CNF_CODE'] =  (empty($_POST['CNF_CODE']) && strlen($_POST['CNF_CODE']) == 0 ?NULL :(int)$_POST['CNF_CODE']);	
		
	$params = array(
		$_POST['Description'],
		$_POST['Brand'],
		$_POST['Manufacturer'],
		$_POST['Comments'],
		$_POST['CNF_CODE'],
		'',
		$_POST['Classification_Type'],
		$_POST['Classification_Number'],
		$_POST['Cluster_Number']
	);

	$query =<<<EOQ
UPDATE Product
   SET Description    = ?,
       Brand          = ?,
       Manufacturer   = ?,
       Comments       = ?,
       CNF_CODE       = ?,
       Cluster_Number = ?,
       Last_Edited_By = ?
 WHERE ProductID      = ?

EOQ;
	
						$stmt = $conn->prepare($query);
						$stmt->bind_param("ssssddsi", $params[0], $params[1], $params[2], $params[3], $params[4], $params[8],$Username,$productID);
						$result_insert = $stmt->execute();	
	

	if($result_insert){


			$stmt_classification = $conn->prepare("Select * From Classification Where Classification_Number= ?");		
			$stmt_classification->bind_param("d", $params[7]);
			$result_c = $stmt_classification->execute();
			$stmt_classification->store_result();
				if(($stmt_classification->num_rows)>0){
						
		
		$classification_check1 = $conn->prepare("Select * From Product_Classification Where ProductID =?");		
		$classification_check1->bind_param("i", $productID);
		$classification_check_result1 = $classification_check1->execute();
			$classification_check1->store_result();
							if(($classification_check1->num_rows)>0){
					
						$classification_update = $conn->prepare("UPDATE Product_Classification SET ClassificationID=(Select ClassificationID From Classification where Classification_Number =?) Where ProductID = ?");		
	
						$classification_update->bind_param("di",$params[7], $productID);
						$classification_update_result = $classification_update->execute();

							if(!$classification_update_result){
	
	   echo "Invalid classification number";
}else
{ 		

		//echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully updated. Redirecting to the view page...</strong></h3>\";</script>";
		
		echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully updated. Redirecting to the view page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
		
		
		
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",3000);</script>";


}
							
					}else{

							$query2 =<<<EOQ
INSERT Into Product_Classification(
       ClassificationID,
       ProductID
) Select ClassificationID, ? from Classification where Classification_Number =?
EOQ;
	$params_product_classification = array($productID,$params[7]);
		
						$stmt_product_classification = $conn->prepare($query2);
						$stmt_product_classification->bind_param("id", $params_product_classification[0], $params_product_classification[1]);
						$result_product_classification = $stmt_product_classification->execute();
		
						if($result_product_classification){
							
					//	echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully updated. Redirecting to the view page...</strong></h3>\";</script>";
						
								echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully updated. Redirecting to the view page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
						
						echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",3000);</script>";


						}
					
					}
				}else{
		echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully updated. Redirecting to the view page...</strong></h3>\";</script>";
		echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$productID';\",3000);</script>";


					
				}
		


	}
	

}
$conn->close();
?>
