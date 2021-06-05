
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
<div class="container" style="padding: 0;margin-top: 1px">
    <ul class="nav nav-pills nav-justified">
        <li  style="font-size: 16px"><a href="danhsach.php">Danh Sách Sản Phẩm</a></li>
        <li  style="font-size: 16px"><a href="themmoi.php">Thêm Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="dsloaisanpham.php">DS Loại Sản Phẩm</a></li>
        <li class="active" style="font-size: 16px"><a>Thêm Loại Sản Phẩm</a></li>
        <li style="font-size: 16px"><a href="giohang.php">Giỏ hàng</a></li>
        <li style="font-size: 16px"><a href="thanhtoan.php">Thanh Toán</a></li>
    </ul>
</div>
<Main id="Main">
    <div class="main-form">
        <div class="row aaa">
            <div class="forms">
                <h1>Thêm Loại Sản Phẩm</h1>
                <form action="save1.php" method="POST">
                    <div class="forms-1">
                        <div class="form-group form1">
                            <label>Tên SP:</label>
                            <input type="text" class="ipf" id="name" placeholder="Tên Loại sản phẩm.." name="tenloai" required>
                        </div>
                        <div class="form-group form1">
                            <label for="class">Giá:</label>
                            <input type="text" class="ipf" id="class" placeholder="Số lượng.." name="soluong" required>
                        </div>
                        <button type="submit">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Main>
</body>
</html>