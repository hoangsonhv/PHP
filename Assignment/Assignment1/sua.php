<?php include_once "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
    <?php
        $id = $_GET['id'];
        $ds = queryDB("select * from sanpham where id = $id");
        if(count($ds) == 0){
            header("location: danhsach.php");
        }
        $sp = $ds[0];
    ?>
    <div class="container" style="padding: 0;margin-top: 1px">
        <ul class="nav nav-pills nav-justified">
            <li class="active" style="font-size: 16px"><a href="danhsach.php">Danh Sách Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="themmoi.php">Thêm Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="dsloaisanpham.php">Danh Sách Loại Sản Phẩm</a></li>
            <li style="font-size: 16px"><a href="themlsp.php">Thêm Loại Sản Phẩm</a></li>
        </ul>
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

