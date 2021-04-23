<?php
include_once 'src/Student.php';
include_once 'src/StudentManager.php';
$student = new StudentManager('sudent.json');
$ID =
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
}
$data = [
    'name' => $name,
    'age' => $age,
    'phone' => $phone,
    $address => $address
];


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
        Tên: <input type="text" name="name" > <br>
        Tuổi: <input type="text" name="age"> <br>
        SDT:<input type="text" name="phone"> <br>
        Địa chỉ:<input type="text" name="address"> <br>
        <button type="submit">OK</button>
    </fieldset>
</form>
</body>
</html>