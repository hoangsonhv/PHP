<?php include_once "database.php"; ?>
<?php include_once "session.php";?>
<?php
    $_SESSION["user"] = [
        "username"=>"Hoàng Văn Sơn ",
        "email" =>"sonhv@gmail.com"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
    <?php
        $sql_txt = "select * from sanpham";
        $dssp = queryDB($sql_txt);
    ?>
    <div class="container" style="padding: 0;margin-top: 1px">
        <ul class="nav nav-pills nav-justified">
            <li class="active" style="font-size: 16px"><a>Danh Sách Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="themmoi.php">Thêm Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="dsloaisanpham.php">DS Loại Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="themlsp.php">Thêm Loại Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="giohang.php">Giỏ hàng</a></li>
            <li style="font-size: 16px"><a href="thanhtoan.php">Thanh Toán</a></li>
        </ul>
    </div>
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
                        <td><a href="themgiohang.php?id=<?php echo $sp["id"];?>">Thêm giỏ hàng</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

