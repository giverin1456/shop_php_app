<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <!-- 変数$totalPaymentを定義し、数値の0を代入してください -->
    <?php  $totalPayment = 0?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        // それぞれの$menu(それぞれの商品)の注文数を定義
        $menu->setOrderCount($orderCount);
        // それぞれの商品の注文数を$orderCountに代入する
        $totalPayment += $menu->getTotalPrice();
        // getTotalPriceで商品全ての合計金額
        
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
      <!-- 金額×注文数を表示 -->
    <?php endforeach ?>
    <!-- $totalPaymentを表示してください -->
    <h3>合計金額: <?php echo $totalPayment?>円</h3>
  </div>
</body>
</html>