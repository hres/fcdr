
<?php include 'connection.php';?>
<?php

$ProductID = ($_GET['ProductID']?$_GET['ProductID']:'');

$check_last =<<<EOQ
  Select P.ProductID, S.ProductIDS  FROM Product P 
  INNER JOIN Sales S ON P.ProductID  = S.ProductIDS WHERE ProductID = ?
   UNION ALL  
   Select P.ProductID, PK.ProductIDP   FROM Product P 
  INNER JOIN Package PK ON P.ProductID  = PK.ProductIDP WHERE ProductID = ?
EOQ;


							$stmt = $conn->prepare($check_last);
					     	$stmt->bind_param("ii",$ProductID,$ProductID);
							$result1 = $stmt->execute();	
							$result = $stmt->store_result();		
if (($stmt->num_rows) < 1 ){
echo "This product has no Market Share nor Label attached to it, you can choose to delete it!"; 

//echo "<script type=\"text/javascript\"> document.getElementById(\"detelelast\").style.display = \"none\"; </script>";

}

  ?>

