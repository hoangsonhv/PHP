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
<Main id="Main">
    <div class="main-form">
        <div class="row aaa">
            <div class="form">
                <h1>Thêm</h1>
            </div>
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
                        <a href="dsloaisanpham.php">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Main>
</body>
</html>