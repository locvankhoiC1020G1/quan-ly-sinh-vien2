<?php
include 'User.php';
include 'UserManager.php';
$userManagerment = new UserManager('user.json');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $password =$_POST['password'];
    $userManagerment->checkLogin($name,$password);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form{
        width:40%;
    }
</style>
<body>
<form action="" method="post">
    <fieldset>
        Tài khoản: <input type="text" name="name">
      Mật khẩu:  <input type="password" name="password">
        <button type="submit">Đăng nhập</button>
    </fieldset>
</form>
<a href="register.php">Đăng ký</a>
</body>
</html>