<?php

include ('connection.php');

	if(isset($_POST['search'])) {
	 error_reporting(E_ALL);
ini_set('display_errors', 1); 
$list_of_classification = array();
$list_of_nielsen_category = array();

//Classification_Number


foreach ($_POST['Classification_Number'] as  $selectedOptionClass){

if($selectedOptionClass != null){
    $list_of_classification[] = $selectedOptionClass; 
}
}

foreach ($_POST['Nielsen_Category'] as  $selectedOption){

if($selectedOption != null){
    $list_of_nielsen_category[] = $selectedOption; 
}
}

if(count($list_of_nielsen_category )<1){
if($stmt = $conn->prepare("Select distinct Nielsen_Category from Sales")){
    $stmt->execute();
    $stmt->bind_result($Nielsen_Category);
    while($stmt->fetch()){
        $list_of_nielsen_category[] = $Nielsen_Category;

    }

}
}

if(count($list_of_classification) <1){
if($stmt_classification = $conn->prepare("Select Distinct Classification_Number from Classification where Classification_Number NOT IN ('99.9999','99.9998')")){
    $stmt_classification->execute();
    $stmt_classification->bind_result($Classification_Number);
    
    while($stmt_classification->fetch()){
        $list_of_classification[] = $Classification_Number;

    }

}else{

    echo "something went wrong.. ohh noo";
}
}
//Now we have the list of Classification and Nielsen Category
//  $query .= "WHERE " . implode (' AND ', $conditions);

$array1 = implode(",",$list_of_classification);
 if(isset($_POST['date1']) && $_POST['date1'] != ''){
			 
			   $from_date = $_POST['date1'];

				$to_date = $_POST['date2'];

// AND Collection_Date between '$from_date' and '$to_date'

 
 if(isset($_POST['Sales_Year']) && $_POST['Sales_Year'] != ''){



     $Sales_year = $_POST['Sales_Year'];


$query=<<<EOQX
SELECT T1.COUNT1, T1.SUM1, T2.COUNT2, T2.SUM2, T3.COUNT3, T3.SUM3
FROM (
SELECT COUNT(S1.SalesID) AS COUNT1, SUM(S1.Kilo_Vol) AS SUM1, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC
ON P.ProductID = PC.ProductID
LEFT JOIN Classification C
ON PC.ClassificationID = C.ClassificationID
INNER JOIN Sales S1
ON P.ProductID = S1.ProductIDS
WHERE S1.Nielsen_Category = ?
AND C.Classification_Number IN ($array1) AND Collection_Date between '$from_date' and '$to_date' AND Sales_Year ="$Sales_year1") T1
JOIN (
SELECT COUNT(S2.SalesID) AS COUNT2, SUM(S2.Kilo_Vol) AS SUM2, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC2
ON P.ProductID = PC2.ProductID
LEFT JOIN Classification C2
ON PC2.ClassificationID = C2.ClassificationID
INNER JOIN Sales S2
ON P.ProductID = S2.ProductIDS
WHERE S2.Nielsen_Category = ?
AND C2.Classification_Number = '99.9998' AND Collection_Date between '$from_date' and '$to_date' AND Sales_Year ="$Sales_year1"
) T2 ON T1.ID = T2.ID
JOIN (
SELECT COUNT(S3.SalesID) AS COUNT3, SUM(S3.Kilo_Vol) AS SUM3, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC3
ON P.ProductID = PC3.ProductID
LEFT JOIN Classification C3
ON PC3.ClassificationID = C3.ClassificationID
INNER JOIN Sales S3
ON P.ProductID = S3.ProductIDS
WHERE S3.Nielsen_Category = ?
AND C3.Classification_Number = '99.9999' AND Collection_Date between '$from_date' and '$to_date' AND Sales_Year ="$Sales_year1"
) T3 ON T2.ID = T3.ID

EOQX;

 }else{

 

$query=<<<EOQX
SELECT T1.COUNT1, T1.SUM1, T2.COUNT2, T2.SUM2, T3.COUNT3, T3.SUM3
FROM (
SELECT COUNT(S1.SalesID) AS COUNT1, SUM(S1.Kilo_Vol) AS SUM1, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC
ON P.ProductID = PC.ProductID
LEFT JOIN Classification C
ON PC.ClassificationID = C.ClassificationID
INNER JOIN Sales S1
ON P.ProductID = S1.ProductIDS
WHERE S1.Nielsen_Category = ?
AND C.Classification_Number IN ($array1) AND Collection_Date between '$from_date' and '$to_date') T1
JOIN (
SELECT COUNT(S2.SalesID) AS COUNT2, SUM(S2.Kilo_Vol) AS SUM2, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC2
ON P.ProductID = PC2.ProductID
LEFT JOIN Classification C2
ON PC2.ClassificationID = C2.ClassificationID
INNER JOIN Sales S2
ON P.ProductID = S2.ProductIDS
WHERE S2.Nielsen_Category = ?
AND C2.Classification_Number = '99.9998' AND Collection_Date between '$from_date' and '$to_date'
) T2 ON T1.ID = T2.ID
JOIN (
SELECT COUNT(S3.SalesID) AS COUNT3, SUM(S3.Kilo_Vol) AS SUM3, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC3
ON P.ProductID = PC3.ProductID
LEFT JOIN Classification C3
ON PC3.ClassificationID = C3.ClassificationID
INNER JOIN Sales S3
ON P.ProductID = S3.ProductIDS
WHERE S3.Nielsen_Category = ?
AND C3.Classification_Number = '99.9999' AND Collection_Date between '$from_date' and '$to_date'
) T3 ON T2.ID = T3.ID

EOQX;


}
}else{

 if(isset($_POST['Sales_Year']) && $_POST['Sales_Year'] != ''){


 $Sales_year1 = $_POST['Sales_Year'];

$query=<<<EOQX
SELECT T1.COUNT1, T1.SUM1, T2.COUNT2, T2.SUM2, T3.COUNT3, T3.SUM3
FROM (
SELECT COUNT(S1.SalesID) AS COUNT1, SUM(S1.Kilo_Vol) AS SUM1, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC
ON P.ProductID = PC.ProductID
LEFT JOIN Classification C
ON PC.ClassificationID = C.ClassificationID
INNER JOIN Sales S1
ON P.ProductID = S1.ProductIDS
WHERE S1.Nielsen_Category = ?
AND C.Classification_Number IN ($array1) AND Sales_Year ="$Sales_year1") T1
JOIN (
SELECT COUNT(S2.SalesID) AS COUNT2, SUM(S2.Kilo_Vol) AS SUM2, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC2
ON P.ProductID = PC2.ProductID
LEFT JOIN Classification C2
ON PC2.ClassificationID = C2.ClassificationID
INNER JOIN Sales S2
ON P.ProductID = S2.ProductIDS
WHERE S2.Nielsen_Category = ?
AND C2.Classification_Number = '99.9998' AND Sales_Year ="$Sales_year1"
) T2 ON T1.ID = T2.ID
JOIN (
SELECT COUNT(S3.SalesID) AS COUNT3, SUM(S3.Kilo_Vol) AS SUM3, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC3
ON P.ProductID = PC3.ProductID
LEFT JOIN Classification C3
ON PC3.ClassificationID = C3.ClassificationID
INNER JOIN Sales S3
ON P.ProductID = S3.ProductIDS
WHERE S3.Nielsen_Category = ?
AND C3.Classification_Number = '99.9999' AND Sales_Year ="$Sales_year1"
) T3 ON T2.ID = T3.ID

EOQX;




 }else{ 


$query=<<<EOQX
SELECT T1.COUNT1, T1.SUM1, T2.COUNT2, T2.SUM2, T3.COUNT3, T3.SUM3
FROM (
SELECT COUNT(S1.SalesID) AS COUNT1, SUM(S1.Kilo_Vol) AS SUM1, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC
ON P.ProductID = PC.ProductID
LEFT JOIN Classification C
ON PC.ClassificationID = C.ClassificationID
INNER JOIN Sales S1
ON P.ProductID = S1.ProductIDS
WHERE S1.Nielsen_Category = ?
AND C.Classification_Number IN ($array1)) T1
JOIN (
SELECT COUNT(S2.SalesID) AS COUNT2, SUM(S2.Kilo_Vol) AS SUM2, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC2
ON P.ProductID = PC2.ProductID
LEFT JOIN Classification C2
ON PC2.ClassificationID = C2.ClassificationID
INNER JOIN Sales S2
ON P.ProductID = S2.ProductIDS
WHERE S2.Nielsen_Category = ?
AND C2.Classification_Number = '99.9998'
) T2 ON T1.ID = T2.ID
JOIN (
SELECT COUNT(S3.SalesID) AS COUNT3, SUM(S3.Kilo_Vol) AS SUM3, 1 AS ID
FROM Product P
LEFT JOIN Product_Classification PC3
ON P.ProductID = PC3.ProductID
LEFT JOIN Classification C3
ON PC3.ClassificationID = C3.ClassificationID
INNER JOIN Sales S3
ON P.ProductID = S3.ProductIDS
WHERE S3.Nielsen_Category = ?
AND C3.Classification_Number = '99.9999'
) T3 ON T2.ID = T3.ID

EOQX;


}
}



////////////////////////////////
								//$stmt_first = $conn->prepare($first_query);
                                //$stmt_third = $conn->prepare($third_query);
								//$stmt_second = $conn->prepare($second_query);

                                $stmt_query = $conn->prepare($query);
                        	 
                                    if(!$stmt_query){
                                        echo "something went wrong sds".$conn->error;
                                        
                                    }


 echo "<thead> <tr><th rowspan=\"2\">Neilsen Category Name </th><th colspan=\"3\"> Product assigned in <br> Sodium Categories </th>
    <th colspan=\"3\"> Product assigned outise <br> Sodium Categories </th><th colspan=\"3\"> Product excluded</th><th colspan=\"2\"> Total </th></tr>";

 echo "<tr><th>N</th> <th>Kilo Volume</th><th>Pct</th><th>N</th>  <th>Kilo Volume</th><th>Pct</th> <th>N</th>  <th>Kilo Volume</th><th>Pct</th><th>N</th>  <th>Kilo Volume</th></tr></thead> <tbody></tr> ";
    


                                 

foreach ($list_of_nielsen_category as $value) {
    
									$stmt_query->bind_param("sss", $value, $value, $value); 
								    $stmt_query->execute();
                                    $stmt_query->bind_result($number_of_product, $sum_kilo_vol,$number_of_product_1, $sum_kilo_vol_1,$number_of_product_2, $sum_kilo_vol_2);
                                    $stmt_query->fetch();





   						
                                  //  echo "##$value#### $number_of_product_2";
   //echo "'$value', '$number_of_product', '$number_of_product_1', '$sum_kilo_vol_1','$number_of_product_2','$sum_kilo_vol_2' <br>"; //, '$sum_kilo_vol','$number_of_product_1','$sum_kilo_vol_1','$number_of_product_2','$sum_kilo_vol_2'
                                   //Total number of Product
                                    $total_number_of_product = $number_of_product + $number_of_product_1 + $number_of_product_2;
                                   //Total Kilo vol
                                    $total_kilo_vol = $sum_kilo_vol + $sum_kilo_vol_1 + $sum_kilo_vol_2;
                                  //Pct Product assigned in sodium Category
                                    $pct_1 = (empty($total_kilo_vol) || $total_kilo_vol == 0 ?0 :(($sum_kilo_vol/$total_kilo_vol) * 100));
                                    //Pct Product assigned Outside sodium Category
                                    $pct_2 =  (empty($total_kilo_vol) || $total_kilo_vol == 0 ?0 :(($sum_kilo_vol_1/$total_kilo_vol) * 100));
                                    //Pct Product excluded
                                    $pct_3 = (empty($total_kilo_vol) || $total_kilo_vol == 0 ?0 :(($sum_kilo_vol_2/$total_kilo_vol) * 100));


                                    //echo "<br> Total # of  $total_number_of_product";
        echo "<tr><td>$value</td><td>$number_of_product</td><td>$sum_kilo_vol</td><td>$pct_1</td><td>$number_of_product_1</td><td>$sum_kilo_vol_1</td><td>$pct_2</td><td>$number_of_product_2</td><td>$sum_kilo_vol_2</td><td>$pct_3</td><td>$total_number_of_product</td><td>$sum_kilo_vol</td></tr>";                            

}

echo " </tbody></table>";
echo "<script>document.getElementById(\"toHide\").style.display= \"block\";</script>";

 mysqli_close($conn);
    }

?>

