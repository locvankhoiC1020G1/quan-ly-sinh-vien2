<?php
include_once 'src/Student.php';
include_once 'src/StudentManager.php';
$studentManagerment = new StudentManager('sudent.json');
$students = $studentManagerment->displayStudent();
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
<table>
    <a href="add.php">Thêm học sinh</a>
<tr>
    <td>STT</td>
    <td>Tên </td>
    <td>Tuổi</td>
    <td>SDT</td>
    <td>Địa chỉ</td>
    <td></td>
</tr>
    <tr>
        <?php foreach($students as $key=> $student){ ?>
        <td><?php echo $key +1; ?> </td>
        <td><?php echo $student->getName();?></td>
        <td><?php echo $student->getAge();?></td>
        <td><?php echo $student->getPhone();?></td>
        <td><?php echo $student->getAddress();?></td>
        <td><a onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $key ?>">Delete</a>
            <a href="edit.php">Sửa</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>