<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sửa</title>
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
        $id = $_GET['id'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "trenlop";

        $conn = new mysqli($servername,$username,$password,$db);

        if ($conn->connect_errno){
            die("Connect error..");
        }
        $sql_txt = "select * from sanpham where id = $id";
        $rs = $conn->query($sql_txt);
        $sp = null;
        if($rs->num_rows>0){
            while($row = $rs->fetch_assoc()){
                $sp = $row;
                break;
            }
        }
        if($sp == null) header("location: danhsach.php");
    ?>
    <div id="Header">
        <div class="header-main sticky-top" id="header-main">
            <div class="bbb">
                <div class="Navbar-header">
                    <ul class=" navbar-nav">
                        <li class="active"><a href="danhsach.php" class="nav-link dropdown-toggle active">Danh Sách SP</a></li>
                        <li><a href="themmoi.php" class="nav-link dropdown-toggle active">Thêm SP</a></li>
                        <li><a class="nav-link dropdown-toggle active">Sửa SP</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Danh Sách Category</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Thêm Category</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Sửa Category</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="Main">
        <div id="Main-content">
            <div class="main-form">
                <div class="row aaa">
                    <div class="forms" style="margin-top: -50px">
                        <h1>Sửa sản phẩm</h1>
                       <form action="capnhat.php" method="POST">
                           <div class="forms-1">
                               <input type="hidden" name="id" value="<?php echo $sp["id"];?>"/>
                               <div class="form-group form1">
                                   <label for="name">Tên SP:</label>
                                   <input type="text" class="ipf" id="name" value="<?php echo $sp["ten"];?>" placeholder="Tên Sản phẩm.." name="ten">
                               </div>
                               <div class="form-group form1">
                                   <label for="class">Giá:</label>
                                   <input type="text" class="ipf" id="class" value="<?php echo $sp["gia"];?>" placeholder="Giá.." name="gia">
                               </div>
                               <div class="form-group form1">
                                   <label for="address">Mô tả:</label>
                                   <input type="text" class="ipf" id="address" value="<?php echo $sp["mota"];?>" placeholder="Mô tả.." name="mota">
                               </div>
                               <div class="form-group form1">
                                   <label>Tên NCC:</label>
                                   <input type="text" class="ipf" id="number" value="<?php echo $sp["tenncc"];?>" placeholder="Tên nhà cung cấp.." name="tenncc">
                               </div>
                               <button type="submit" name="dangky">Cập nhật</button>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

