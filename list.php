<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <?php
        $dshocsinh = [];
        $dshocsinh[] = [
            "name"=>"Hoang van son",
            "age"=>"24"
        ];
        $dshocsinh[] = [
            "name"=>"Đào minh giang",
            "age"=>"24"
        ];
//        $dshocsinh[] = "trương quang huy";
    ?>
    <ul>
    <?php foreach ($dshocsinh as $hs){ ?>
        <li><?php echo $hs["name"]."--".$hs["age"]; ?></li>
    <?php } ?>
    </ul>
    <a href="index.php">quay vè index</a>
</body>
</html>