<?php include_once "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
    <?php
    $sql_txt = "select * from loaisanpham";
    $dssp = queryDB($sql_txt);
    ?>
    <div class="container" style="padding: 0;margin-top: 1px">
        <ul class="nav nav-pills nav-justified">
            <li style="font-size: 16px"><a href="danhsach.php">Danh Sách Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="themmoi.php">Thêm Sản Phẩm</a></li>
            <li class="active" style="font-size: 16px"><a>DS Loại Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="themlsp.php">Thêm Loại Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="giohang.php">Giỏ hàng</a></li>
            <li style="font-size: 16px"><a href="thanhtoan.php">Thanh Toán</a></li>
        </ul>
    </div>
<div id="Main">
    <div class="container abc " style="margin-top: 50px">
        <h1>Danh Sách Loại Sản Phẩm</h1>
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>Tên Loại SP</th>
                <th>Số Lượng</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dssp as $sp){ ?>
                <tr>
                    <td><?php echo $sp["tenloai"]; ?></td>
                    <td><?php echo $sp["soluong"]; ?></td>
                    <td><a href="xoalsp.php?id=<?php echo $sp["id"];?>">Xóa</a></td>
                    <td><a href="sualsp.php?id=<?php echo $sp["id"];?>">Sửa</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

