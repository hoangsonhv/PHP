<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Thêm sinh viên</title>
</head>
<body>
    <div class="container">
        <h1>Thêm sinh viên</h1>
        <form action="?route=luusv" method="post">
            <div class="form-group">
                <label>Name</label>
                <input name="name" placeholder="Name" type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input name="age" placeholder="Age" type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input name="address" placeholder="Address" type="text" class="form-control"/>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>