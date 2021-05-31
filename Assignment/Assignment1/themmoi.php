<!doctype html>
<html lang="en">
<head>
    <title>Thêm Sản Phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.php" media="screen">
</head>
<body>
<div id="Header">
    <div class="header-main sticky-top" id="header-main">
        <div class=" bbb">
            <div class="Navbar-header">
                <ul class=" navbar-nav">
                    <li class="active"><a href="danhsach.php" class="nav-link dropdown-toggle active">Danh Sách SP</a></li>
                    <li><a class="nav-link dropdown-toggle active">Thêm SP</a></li>
                    <li><a href="#" class="nav-link dropdown-toggle active">Sửa SP</a></li>
                    <li><a href="#" class="nav-link dropdown-toggle active">Danh Sách Category</a></li>
                    <li><a href="#" class="nav-link dropdown-toggle active">Thêm Category</a></li>
                    <li><a href="#" class="nav-link dropdown-toggle active">Sửa Category</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<Main id="Main">
    <div class="main-form">
        <div class="row aaa">
            <div class="form">
                <h1>Đăng Ký</h1>
            </div>
            <div class="forms">
                <h1>Phiếu đăng ký</h1>
                <div class="forms-1">
                    <div class="form-group form1">
                        <label for="name">Tên SP:</label>
                        <input type="text" class="ipf" id="name" placeholder="Tên sản phẩm.." name="name">
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
                    <button type="submit" name="dangky">Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>
</Main>
</body>
</html>