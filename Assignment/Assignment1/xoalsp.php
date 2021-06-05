<?php
include_once "database.php" ;
$id = $_GET['id'];

$sql_txt = "delete from loaisanpham where id = $id";
if(insertOrUpdateDB($sql_txt)){
    header("location: dsloaisanpham.php");
}else{
    echo "Error";
}