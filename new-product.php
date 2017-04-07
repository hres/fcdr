<?php include 'connection.php';?>


<?php

	if(isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {


       // if (!empty($_POST['token'])) {
   
 // $_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);
 
    //if (hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
    

$Username = $_SESSION['currentuser'];

	$_POST['Cluster_Number'] =  (empty($_POST['Cluster_Number']) && strlen($_POST['Cluster_Number']) == 0 ?NULL :(int)$_POST['Cluster_Number']);		
	$_POST['CNF_CODE'] =  (empty($_POST['CNF_CODE']) && strlen($_POST['CNF_CODE']) == 0 ?NULL :(int)$_POST['CNF_CODE']);	
		
	$params = array($_POST['Description'],$_POST['Brand'], $_POST['Manufacturer_Name'],$_POST['Comments'],$_POST['CNF_CODE'],$_POST['Classification_Type'],$_POST['Classification_Number'],$_POST['Cluster_Number']);
	
	$flag = 0;
	
	if (strlen($params[6]) !=0){
	
							$query =<<<EOQ
INSERT Into Product(
       Description,
       Brand,
       Manufacturer,
       Comments,
       CNF_CODE,
       Cluster_Number,
	   Last_Edited_By

) VALUES ( ?, ?, ?, ?, ?, ?, ?)
EOQ;
						$stmt = $conn->prepare($query);
						$stmt->bind_param("ssssdds", $params[0], $params[1], $params[2], $params[3], $params[4], $params[7], $Username);
						$result_insert = $stmt->execute();
						$id =  mysqli_insert_id($conn);
						
			if (!$result_insert ) {
				
						echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message2\"). innerHTML = \"<h3><strong>Failed to create a product...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";


				}
					
				else {
					
					
					
							echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully Created. Redirecting to the view page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
					
						echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$id';\",3000);</script>";


					
					}


							$query2 =<<<EOQ
INSERT Into Product_Classification(
       ClassificationID,
       ProductID
) Select ClassificationID, ? from Classification where Classification_Number =?
EOQ;
	$params_product_classification = array($id,$params[6]);
		
						$stmt_product_classification = $conn->prepare($query2);
						$stmt_product_classification->bind_param("id", $params_product_classification[0], $params_product_classification[1]);
						$result_product_classification = $stmt_product_classification->execute();

		$flag = 1;

		
		
		}	
		
		
		else{

										$query_product =<<<EOQ
INSERT Into Product(
       Description,
       Brand,
       Manufacturer,
       Comments,
       CNF_CODE,
       Cluster_Number

) VALUES ( ?, ?, ?, ?, ?, ?)
EOQ;
						$stmt_product = $conn->prepare($query_product);
						$stmt_product->bind_param("ssssdd", $params[0], $params[1], $params[2], $params[3], $params[4], $params[7]);
						$result_insert_x = $stmt_product->execute();
						$id =  mysqli_insert_id($conn);
				
						
			if (!$result_insert_x ) {
				
						//echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message2\"). innerHTML = \"<h3><strong>Failed to create a product...</strong></h3>\";</script>";
										echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message2\"). innerHTML = \"<h3><strong>Failed to create a product...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";

				}
					
				else {
					
						//echo "<script type=\"text/javascript\"> document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully Created. Redirecting to the view page...</strong></h3>\";</script>";
					
												echo "<script type=\"text/javascript\">\n";
echo "    $(document).ready(function() {\n";

	echo "document.getElementById (\"confirm-message\"). innerHTML = \"<h3><strong>Product Successfully Created. Redirecting to the view page...</strong></h3>\"";


echo "    });\n";
echo "</script>\n";
				
					
						echo "<script>setTimeout(\"location.href = 'view_product.php?ProductID=$id';\",3000);</script>";


					
					}
		
		}
/*
	}else{
	$var1 = 	  $_POST['token'] =  rtrim($_POST['token']);
 $var2 = $_SESSION['token'] =   rtrim($_SESSION['token']);
		echo "NOT SAME $var1 <br>  $var2";

	}
	*/
//}
}

$conn->close();
?>
