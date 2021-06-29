<?php include_once "database.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $dssv = queryDB("select * from sinhvien where id = $id");
    if(count($dssv) == 0){
        header("Location: list.php");
    }
    $sv = $dssv[0];
?>
<form action="capnhat.php"  method="POST">
    <input type="hidden" name="id" value="<?php echo $sv["id"];?>"/>
    <input type="text" name="name" value="<?php echo $sv["name"];?>" placeholder="Name.."/>
    <input type="number" name="age" value="<?php echo $sv["age"];?>" placeholder="Age.."/>
    <textarea name="address" placeholder="Address"><?php echo $sv["address"];?></textarea>
    <button type="submit">Submit</button>
</form>
</body>
</html>