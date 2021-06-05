<?php include_once "database.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chi tiết sinh viên</title>
</head>
<body>
<?php
    $id = $_GET["id"];
    $dssv = queryDB("select * from sinhvien where id = $id");
    if(count($dssv) == 0){
        header("Location: list.php");
    }
    $sv = $dssv[0];
?>
    <h1>ID: <?php echo $id; ?></h1>
    <h1>Name: <?php echo $sv["name"]; ?></h1>
    <h1>Age: <?php echo $sv["age"]; ?></h1>
    <h1>Address: <?php echo $sv["address"]; ?></h1>

</body>
</html>