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


if($stmt_classification = $conn->prepare("Select Classification_Number from Classification where Classification_Number NOT IN ('99.9999','99.9998')")){
    $stmt_classification->execute();
    $stmt_classification->bind_result($Classification_Number);
    
    while($stmt_classification->fetch()){
        $list_of_classification[] = $Classification_Number;

    }

}else{

    echo "something went wrong.. ohh noo";
}
//Now we have the list of Classification and Nielsen Category
//  $query .= "WHERE " . implode (' AND ', $conditions);


$first_query=<<<EOQA
 select count(distinct P.ProductID), SUM(Sales.Kilo_Vol)
 from Product P 
 LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
 LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
 INNER JOIN Sales ON P.ProductID = Sales.ProductIDS
 WHERE Sales.Nielsen_Category = ? 
 and C.Classification_Number IN ('1.5101','1.6001')

EOQA;

$second_query=<<<EOQB
 select count(distinct P.ProductID), SUM(Sales.Kilo_Vol)
 from Product P 
 LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
 LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
 INNER JOIN Sales ON P.ProductID = Sales.ProductIDS
 WHERE Sales.Nielsen_Category = ? 
 and C.Classification_Number = '99.9998'

EOQB;

$third_query=<<<EOQC
 select count(distinct P.ProductID), SUM(Sales.Kilo_Vol)
 from Product P 
 LEFT JOIN Product_Classification PC ON P.ProductID = PC.ProductID 
 LEFT JOIN Classification C  ON PC.ClassificationID = C.ClassificationID
 INNER JOIN Sales ON P.ProductID = Sales.ProductIDS
 WHERE Sales.Nielsen_Category = ? 
 and C.Classification_Number = '99.9999'

EOQC;






foreach ($list_of_classification as $value) {
echo "$value";

}
echo "###################";

////////////////////////////////

foreach ($list_of_nielsen_category as $value) {
echo "$value*** <br>";



									$stmt_first = $conn->prepare($first_query);

                                    if(!$stmt_first){
                                        echo "something went wrong ".$conn->error;
                                        
                                    }
									$stmt_first->bind_param("s",$value);
								    $stmt_first->execute();
                                    $stmt_first->bind_result($number_of_product, $sum_kilo_vol);
                                    $stmt_first->fetch();

   
   echo "'$value--', '$number_of_product'*** <br>"; //, '$sum_kilo_vol','$number_of_product_1','$sum_kilo_vol_1','$number_of_product_2','$sum_kilo_vol_2'
                                 


}


///////////////////////////////

 mysqli_close($conn);

?>

