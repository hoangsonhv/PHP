<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chi tiết sinh viên</title>
</head>
<body>
<?php
    $id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "trenlop";

$conn = new mysqli($servername,$username,$password,$db);

if ($conn->connect_errno){
    die("Connect error..");
}
//        echo "Connect success..";
// lay data tu dtb

$sql_txt = "select * from sinhvien where id = $id";
$rs = $conn->query($sql_txt);
$row =$rs->fetch_assoc();
$dssv = $row;
?>
    <h1>ID: <?php echo $id ?></h1>
    <h1>Name: <?php echo $dssv["name"] ?></h1>
    <h1>Age: <?php echo $dssv["age"] ?></h1>
    <h1>Address: <?php echo $dssv["address"] ?></h1>

</body>
</html>