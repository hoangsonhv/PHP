
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
<div class="container" style="padding: 0;margin-top: 1px">
    <ul class="nav nav-pills nav-justified">
        <li style="font-size: 16px"><a href="danhsach.php">Danh Sách Sản Phẩm</a></li>
        <li class="active" style="font-size: 16px"><a>Thêm Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="dsloaisanpham.php">DS Loại Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="themlsp.php">Thêm Loại Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="giohang.php">Giỏ hàng</a></li>
        <li style="font-size: 16px"><a href="thanhtoan.php">Thanh Toán</a></li>
    </ul>
</div>
<Main id="Main">
    <div class="main-form">
        <div class="row aaa">
            <div class="forms">
                <h1>Thêm Sản Phẩm</h1>
                <form action="save.php" method="POST">
                    <div class="forms-1">
                        <div class="form-group form1">
                            <label>Tên SP:</label>
                            <input type="text" class="ipf" id="name" placeholder="Tên sản phẩm.." name="ten" required>
                        </div>
                        <div class="form-group form1">
                            <label for="class">Giá:</label>
                            <input type="text" class="ipf" id="class" placeholder="Giá.." name="gia" required>
                        </div>
                        <div class="form-group form1">
                            <label for="address">Mô tả:</label>
                            <input type="text" class="ipf" id="address" placeholder="Mô tả.." name="mota" required>
                        </div>
                        <div class="form-group form1">
                            <label>Tên NCC:</label>
                            <input type="text" class="ipf" id="number"  placeholder="Tên nhà cung cấp.." name="tenncc" required>
                        </div>
                        <button type="submit" name="dangky">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Main>
</body>
</html>