<?php
    session_start();
    $SP1 = array();
    $SP2 = array();
    $SP3 = array();
    $SP4 = array();
    $SP5 = array();
    $list_products = array();

    $SP1['id'] = "SP1";
    $SP1['name'] = "Iphone 4 32 GB";
    $SP1['price'] = 5000000;

    $SP2['id'] = "SP2";
    $SP2['name'] = "Ipad Mini 16GB";
    $SP2['price'] = 8000000;

    $SP3['id'] = "SP3";
    $SP3['name'] = "Iphone 5 32 GB";
    $SP3['price'] = 7000000;

    $SP4['id'] = "SP4";
    $SP4['name'] = "Iphone 6 32 GB";
    $SP4['price'] = 10000000;

    $SP5['id'] = "SP5";
    $SP5['name'] = "Iphone 6 plus 32 GB";
    $SP5['price'] = 15000000;

    $list_products['SP1'] = $SP1;
    $list_products['SP2'] = $SP2;
    $list_products['SP3'] = $SP3;
    $list_products['SP4'] = $SP4;
    $list_products['SP5'] = $SP5;

    
    $_SESSION['list_products']  = $list_products;
    
    // unset($_SESSION['SP1']);
    // unset($_SESSION['SP2']);
    // unset($_SESSION['SP3']);
    // unset($_SESSION['SP4']);
    // unset($_SESSION['SP5']);
    // unset($_SESSION[]);

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
    <h3 align="center">Danh sách sản phẩm</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Đơn giá</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      foreach($list_products as $product) {
      ?>
        <tr>
          <td><?= $product['id'] ?></td>
          <td><?= $product['name'] ?></td>
          <td><?= $product['price'] ?></td>
          <td>
            <a href="cart.php?id=<?= $product['id'] ?>" type="button" class="btn btn-default">Thêm vào giỏ hàng</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
    </div>
</body>
</html>