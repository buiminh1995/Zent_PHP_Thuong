<?php
session_start();
$id =$_GET['id'];
$student = array();
$student = $_SESSION['info'.$id];
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Thông tin sinh viên</h3>
    <hr>
    <h2>Mã sinh viên: <?= $student['id'] ?></h2>
    <h2>Họ và tên: <?= $student['name'] ?></h2>
    <h2>Số điện thoại: <?= $student['phone'] ?></h2>
    <h2>Email: <?= $student['email'] ?></h2>
    <h2>Giới tính: <?= $student['gender'] ?></h2>
    <h2>Địa chỉ: <?= $student['address'] ?></h2>
    </div>
</body>
</html>