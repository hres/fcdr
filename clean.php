<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
include "connection.php";

$query = "truncate Product_Component";
if($conn->query($query)){
    echo "tructated table";


    if($conn->query("delete from Package")){
        echo "package deleted";
    }else{
        echo "package table not deleted";
    }
}else{
    echo "failed truncating";
}

if($conn->query("delete from Sales")){
    echo "sales deleted";
}else{
    echo "sales table not deleted";
}

if($conn->query("delete from Product_Classification")){
    echo "product_classification deleted";
}else{
    echo "product_classification table not deleted";
}

if($conn->query("delete from Product")){
    echo "Product deleted";
}else{
    echo "Product table not deleted";
}
?>
</body>

</html>