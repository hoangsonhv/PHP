<?php include_once "database.php"; ?>
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<?php include_once "session.php";?>
<body>
<?php  $ds = $_SESSION["gh"]; ?>
<div class="container" style="padding: 0;margin-top: 1px">
    <ul class="nav nav-pills nav-justified">
        <li style="font-size: 16px"><a href="danhsach.php">Danh Sách Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="themmoi.php">Thêm Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="dsloaisanpham.php">DS Loại Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="themlsp.php">Thêm Loại Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="giohang.php">Giỏ hàng</a></li>
        <li  class="active" style="font-size: 16px"><a>Thanh Toán</a></li>
    </ul>
</div>
    <div class="container gh">
        <h1>Thanh toán hóa đơn</h1>
        <div class="col-md-6">
            <form class="form-horizontal" action="save2.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Họ Tên:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Họ Tên.." name="ten">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Tuổi:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Tuổi.." name="tuoi">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Giới Tính:</label>
                    <div class="col-sm-10">
                        <select name="gioitinh">
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">SDT:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"  placeholder="Số điện thoại..." name="sdt">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Địa Chỉ:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Địa Chỉ.." name="diachi">
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-6 col-right">
            <?php foreach ($ds as $sp){ ?>
                <div class="sp">
                    <p>Tên SP: <?php echo $sp["ten"]; ?></p>
                    <p>Giá: <?php echo $sp["gia"]; ?></p>
                    <p>Hãng: <?php echo $sp["tenncc"]; ?></p>
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-default">Thanh Toán</button>
    </div>
</body>
</html>