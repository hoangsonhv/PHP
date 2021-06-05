<?php include_once "session.php";?>
<?php include_once "database.php";?>
<?php
$giohang = $_SESSION["gh"];
$id = $_GET["id"];
$ds = queryDB("select * from sanpham where id = $id");
if(count($ds) == 0){
    header("Location: danhsach.php");
}
$sp = $ds[0];
if(!in_array($sp,$giohang)){
    $giohang[] = $sp;
    $_SESSION["gh"] = $giohang;
}
header("Location: danhsach.php");