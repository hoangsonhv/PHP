<!DOCTYPE html>
<html lang="en">
<head>
    <title>Danh Sách Sản Phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.php" media="screen">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "trenlop";

        $conn = new mysqli($servername,$username,$password,$db);

        if ($conn->connect_errno){
            die("Connect error..");
        }
        $sql_txt = "select * from sanpham";
        $rs = $conn->query($sql_txt);
        $dssp = [];
        if ($rs->num_rows>0){
            while ($row = $rs->fetch_assoc()){
                $dssp[] = $row;
            }
        }
    ?>
<div id="Main">
    <div class="container abc " style="margin-top: 50px">
        <h1>Danh Sách Sản Phẩm</h1>

        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>Tên SP</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Tên NCC</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($dssp as $sp){ ?>
                    <tr>
                        <td><?php echo $sp["ten"]; ?></td>
                        <td><?php echo $sp["gia"]; ?></td>
                        <td><?php echo $sp["mota"]; ?></td>
                        <td><?php echo $sp["tenncc"]; ?></td>
                        <td><a href="xoa.php?id=<?php echo $sp["id"];?>">Xóa</a></td>
                        <td><a href="sua.php?id=<?php echo $sp["id"];?>">Sửa</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <button style="margin-bottom: 20px;width: 100px;height: 30px;font-size: 17px"><a href="themmoi.php" style="text-decoration: none">Thêm</a></button>
    </div>
</div>
</body>
</html>

