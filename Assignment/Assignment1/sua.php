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
    $sanpham = [];
    $sanpham[] = [
        "tensp"=>"Máy tính bảng",
        "gia"=>"12500000",
        "mota"=>"Day la san pham dau tien",
        "tenncc"=>"Apple"
    ];
    $sanpham[] = [
        "tensp"=>"Máy Giặt",
        "gia"=>"15000000",
        "mota"=>"Sịn sò nhất Đông Nam Á",
        "tenncc"=>"SamSung"
    ];
    $sanpham[] = [
        "tensp"=>"Dép lào",
        "gia"=>"20000",
        "mota"=>"Hãng sản xuất dép chính hãng tại Việt Nam",
        "tenncc"=>"Apple"
    ];
    ?>
    <div id="Header">
        <div class="header-main sticky-top" id="header-main">
            <div class="bbb">
                <div class="Navbar-header">
                    <ul class=" navbar-nav">
                        <li class="active"><a class="nav-link dropdown-toggle active">Danh Sách SP</a></li>
                        <li><a href="themmoi.php" class="nav-link dropdown-toggle active">Thêm SP</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Sửa SP</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Danh Sách Category</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Thêm Category</a></li>
                        <li><a href="#" class="nav-link dropdown-toggle active">Sửa Category</a></li>
                    </ul>
                </div>
            </div>
        </div>
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
                    <th>Phụ</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($sanpham as $sp){ ?>
                    <tr>
                        <td><?php echo $sp["tensp"]; ?></td>
                        <td><?php echo $sp["gia"]; ?></td>
                        <td><?php echo $sp["mota"]; ?></td>
                        <td><?php echo $sp["tenncc"]; ?></td>
                        <td><?php echo "<a href='#'>Sửa</a>"; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div id="Main-content">
            <div class="main-form">
                <div class="row aaa">
                    <div class="forms" style="margin-top: -50px">
                        <h1>Sửa sản phẩm</h1>
                        <div class="forms-1">
                            <div class="form-group form1">
                                <label for="name">Tên SP:</label>
                                <input type="text" class="ipf" id="name" placeholder="Tên Sản phẩm.." name="name">
                            </div>
                            <div class="form-group form1">
                                <label for="class">Giá:</label>
                                <input type="text" class="ipf" id="class" placeholder="Giá.." name="gia">
                            </div>
                            <div class="form-group form1">
                                <label for="address">Mô tả:</label>
                                <input type="text" class="ipf" id="address" placeholder="Mô tả.." name="mota">
                            </div>
                            <div class="form-group form1">
                                <label>Tên NCC:</label>
                                <input type="text" class="ipf" id="number"  placeholder="Tên nhà cung cấp.." name="namencc">
                            </div>
                            <button type="submit" name="dangky">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
