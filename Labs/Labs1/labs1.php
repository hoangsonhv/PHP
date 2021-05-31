<!DOCTYPE html>
<html lang="en">
<head>
    <title>Labs1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link type="text/css" s href="css/labs1.css">
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
    <div class="container">
    <table class="table abc">
        <thead>
            <tr>
                <th>Tên SP</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Tên NCC</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sanpham as $sp){ ?>
                <tr>
                    <td><?php echo $sp["tensp"]; ?></td>
                    <td><?php echo $sp["gia"]; ?></td>
                    <td><?php echo $sp["mota"]; ?></td>
                    <td><?php echo $sp["tenncc"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>

