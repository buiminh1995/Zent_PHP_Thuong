<?php
    session_start();
    $id = $_GET['id'];
    if (array_key_exists($id,$_SESSION)){
        $_SESSION[$id]++;
        }
    else{
        $_SESSION[$id] = 1;
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
    <h3 align="center">Thông tin giỏ hàng</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Đơn giá</th>
          <th scope="col">Thành tiền</th>
          <th scope="col">Thời gian cập nhật</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $total = 0;
      foreach($_SESSION as $cart_product => $quantity) {
          if(strpos($cart_product, 'SP') !== false){
              $total += $_SESSION['list_products'][$cart_product]['price']*$quantity;
              ?>
        <tr>
          <td><?= $cart_product ?></td>
          <td><?= $_SESSION['list_products'][$cart_product]['name'] ?></td>
          <td><?= $quantity ?></td>
          <td><?= $_SESSION['list_products'][$cart_product]['price']  ?></td>
          <td><?= $_SESSION['list_products'][$cart_product]['price']*$quantity  ?></td>
          <td>
            <a href="delete_cart.php?id=<?= $cart_product ?>" type="button" class="btn btn-default">Xoá khỏi giỏ hàng</a>
          </td>
        </tr>
      <?php } }?>
      <a href="list_products.php" type="button" class="btn btn-default">Tiếp tục mua hàng</a>
      <h4 align="center">Tổng tiền: <?= $total ?></h4>
      </tbody>
    </table>
    </div>
</body>
</html>