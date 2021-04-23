<?php
include 'User.php';
include 'UserManager.php';
$userManagerment = new UserManager('user.json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $data = [
        'name' => $name,
        'password' => $password
    ];
    $userManagerment->addUser($data);
    header('location: login.php');
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
<body>
<form action="" method="post">
    <fieldset>
        <legend>Nhập tên tài khoản mật khẩu</legend>
        Tên tài khoản:<input type="text" name="name">
        Mật khẩu:<input type="text" name="password">
        <button type="submit">Đăng ký</button>
    </fieldset>
</form>
</body>
</html>
