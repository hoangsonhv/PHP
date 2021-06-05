<?php include_once "session.php";?>
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>

<?php  $ds = $_SESSION["gh"]; ?>
<div class="container" style="padding: 0;margin-top: 1px">
    <ul class="nav nav-pills nav-justified">
        <li style="font-size: 16px"><a href="danhsach.php">Danh Sách Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="themmoi.php">Thêm Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="dsloaisanpham.php">DS Loại Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="themlsp.php">Thêm Loại Sản Phẩm</a></li>
        <li class="active" style="font-size: 16px"><a>Giỏ hàng</a></li>
        <li style="font-size: 16px"><a href="thanhtoan.php">Thanh Toán</a></li>
    </ul>
</div>
<div class="container abc " style="margin-top: 50px">
    <h1>Danh sách Giỏ Hàng</h1>
    <table class="table table-bordered ">
    <thead>
    <tr>
        <th>Tên SP</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Tên NCC</th>
        <th>Thanh Toán</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($ds as $sp){ ?>
        <tr>
            <td><?php echo $sp["ten"]; ?></td>
            <td><?php echo $sp["gia"]; ?></td>
            <td><?php echo $sp["mota"]; ?></td>
            <td><?php echo $sp["tenncc"]; ?></td>
            <td><a href="thanhtoan.php">Thanh Toán</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>