<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <form method="post" action="confirm.php">
      <div class="menu-items">

        <?php foreach ($menus as $menu): ?>
          <!-- 配列menusから値を取っている -->
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
            <!-- インスタンス -> メソッド名 で呼び出し-->
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <!-- 入力コントロールの名前を指定する文字列。フォームデータ(orderCount)と一緒に送信される -->
            <span>個</span>
          </div>
        <?php endforeach ?>

      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>