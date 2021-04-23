<?php
include_once 'src/Student.php';
include_once 'src/StudentManager.php';
$index = $_REQUEST['id'];
$studentManager = new StudentManager('sudent.json');
$studentManager->deleteStudent($index);
header('location: student-managerment.php');
