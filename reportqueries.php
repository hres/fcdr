<?php
include ('connection.php');
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 
$list_of_classification = array();
$list_of_nielsen_category = array();

if($stmt = $conn->prepare("Select distinct Nielsen_Category from Sales")){
    $stmt->execute();
    $stmt->bind_result($Nielsen_Category);
    while($stmt->fetch()){
        $list_of_nielsen_category[] = $Nielsen_Category;

    }

}

$query = "Select Classification_Number 
		 from Classification 
         where Classification_Number 
         NOT IN ('99.9999','99.9998')";
if($stmt_classification = $conn->prepare($query)){
    $stmt_classification->execute();
    $stmt_classification->bind_result($Classification_Number);
    
    while($stmt->fetch()){
        $list_of_classification[] = $Classification_Number;

    }

}
//Now we have the list of Classification and Nielsen Category
//  $query .= "WHERE " . implode (' AND ', $conditions);

$first_query=<<<EOQ
 select count(distinct P.ProductID), SUM(Sales.Kilo_Vol)
 from Product P 
 LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
 LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
 INNER JOIN Sales ON P.ProductID = Sales.ProductIDS
 WHERE Sales.Nielsen_Category = ? 
 and C.Classification_Number IN ('1.5101','1.6001')

EOQ;

$second_query=<<<EOQ
 select count(distinct P.ProductID), SUM(Sales.Kilo_Vol)
 from Product P 
 LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
 LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
 INNER JOIN Sales ON P.ProductID = Sales.ProductIDS
 WHERE Sales.Nielsen_Category = ? 
 and C.Classification_Number ='99.9998' 

EOQ;

$third_query=<<<EOQ
 select count(distinct P.ProductID), SUM(Sales.Kilo_Vol)
 from Product P 
 LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
 LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
 INNER JOIN Sales ON P.ProductID = Sales.ProductIDS
 WHERE Sales.Nielsen_Category = ? 
 and C.Classification_Number ='99.9999' 

EOQ;

$all_queries = array($first_query,$second_query.$third_query);

foreach ($list_of_nielsen_category as $value) {



									$stmt_first = $conn->prepare($first_query);
									$stmt_first->bind_param("s",$value);
								    $stmt_first->execute();
                                    $stmt_first->bind_result($number_of_product, $sum_kilo_vol);
                                    $stmt_first->fetch();

									$stmt_second = $conn->prepare($second_query);
									$stmt_second->bind_param("s",$value);
								    $stmt_second->execute();
                                    $stmt_second->bind_result($number_of_product_1, $sum_kilo_vol_1);
                                    $stmt_second->fetch();
								
                                	$stmt_third = $conn->prepare($third_query);
									$stmt_third->bind_param("s",$value);
								    $stmt_third->execute();
                                    $stmt_third->bind_result($number_of_product_2, $sum_kilo_vol_2);
                                    $stmt_third->fetch();
   
   echo "$value, $number_of_product, $sum_kilo_vol,$number_of_product_1,$sum_kilo_vol_1,$number_of_product_2,$sum_kilo_vol_2";
                                 


}
 $conn->close(); 
?>