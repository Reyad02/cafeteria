<?php
/*id+"&name="+name+"&price="+price+"&stock="+stock+"&type="+type */
include('../config/constants.php');
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
$stock  = $_GET['stock'];
$type = $_GET['type'];

$sql2 = "UPDATE food_items SET id ='$id',name ='$name',price ='$price',stock='$stock', food_type_id='$type' WHERE id='$id' ";
echo $sql2;
    mysqli_query($conn, $sql2);
?>