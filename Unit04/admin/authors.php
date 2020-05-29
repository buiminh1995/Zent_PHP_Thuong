<?php
require_once('../connection.php');
$query_category = "SELECT * FROM authors";
$result_cate = $conn->query($query_category);
$authors = array();
while($row = $result_cate->fetch_assoc()){
	$authors[] = $row;
}
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
    <h3 align="center">Authors List</h3>
    <a href="author_add.php" type="button" class="btn btn-primary">Thêm mới</a>
    <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warning">
          <strong>Thành công</strong> Thêm mới thành công!
        </div>
    <? } ?>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($authors as $author) {
      ?>
        <tr>
          <th scope="row"><?= $author['id'] ?></th>
          <td><?= $cate['name'] ?></td>
          <td><?= $cate['email'] ?></td>
          <td><?= $cate['status'] ?></td>
          <td>
            <a href="author_detail.php?id=<?= $author['id'] ?>" type="button" class="btn btn-default">Xem</a>
            <a href="author_edit.php?id=<?= $author['id'] ?>" type="button" class="btn btn-success">Sửa</a>
            <a href="author_delete.php?id=<?= $author['id'] ?>" type="button" class="btn btn-warning">Xóa</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
    </div>
</body>
</html>