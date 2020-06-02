<?php
    session_start();
    // unset($_SESSION['SP1']);
    // unset($_SESSION['SP5']);
    // unset($_SESSION['list_products']);
    echo '<pre>'; print_r($_SESSION); echo '</pre>';
    unset($_SESSION['info']);
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
    <h3 align="center">Thông tin người dùng</h3>
    <a href="add_1.3.php" type="button" class="btn btn-primary">Thêm mới</a>
    <hr>
    <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <?= $_COOKIE['msg']; ?>
        </div>
    <? } ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Mã sinh viên</th>
          <th scope="col">Họ tên</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $i = 0;
      foreach($_SESSION as $value) {
          $i++;
      ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $value['id'] ?></td>
          <td><?= $value['name'] ?></td>
          <td>
            <a href="detail.php?id=<?= $value['id'] ?>" type="button" class="btn btn-default">Detail</a>
            <a href="delete.php?id=<?= $value['id'] ?>" type="button" class="btn btn-warning">Delete</a>
          </td>
        </tr>
      <?php  }?>
      </tbody>
    </table>
    </div>
</body>
</html>