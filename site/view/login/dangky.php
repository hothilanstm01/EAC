<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../../../site/css/dangky.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
</head>
<body>

<div class="rowww">
<div class="box_bg">

<div class="boxcenter_dangky">
<div class="rowww">
<div class="form">
  <div class="text_dangky">Đăng ký</div>
<form action="../../controller/login.php?act=dangky" method='post' enctype="multipart/form-data" onsubmit="return validate()">
<div class="form-group">
    <label for="exampleInputEmail1">Họ tên</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập họ tên">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Số điện thoại</label>
    <input type="tel" name="sdt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập số điện thoại">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mật khẩu</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
  </div>
  <button type="submit" class="btn btn-primary">Gửi</button>
</form>
</body>
</html>
