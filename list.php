<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <?php
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

        $sql_txt = "select * from sinhvien";
        $rs = $conn->query($sql_txt);
        $dssinhvien = [];
        if ($rs->num_rows>0){
            while ($row = $rs->fetch_assoc()){
                $dssinhvien[] = $row;
            }
        }
    ?>
    <a href="themsinhvien.php">Thêm sinh viên</a>
    <ul>
        <?php foreach($dssinhvien as $sv){ ?>
            <li><a href="chitietsinhvien.php?id=<?php echo $sv["id"];?>"><?php echo $sv["name"]."--".$sv["age"];?></a>
                <a href="edit.php?id=<?php echo $sv["id"];?>">Sửa</a><a href="delete.php?id=<?php echo $sv["id"];?>">Xóa</a></li>
        <?php } ?>
    </ul>
</body>
</html>