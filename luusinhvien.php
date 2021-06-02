<?php
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "trenlop";

$conn = new mysqli($servername,$username,$password,$db);

if ($conn->connect_errno){
    die("Connect error..");
}
$sql_txt = "insert into sinhvien (name,age,address) value ('$name',$age,'$address')";
if ($conn->query($sql_txt)==true){
    header("location: list.php");
}
echo "Error";