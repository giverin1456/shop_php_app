<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    // コンストラクタ→new(インスタンスを作成)時に自動的に呼ばれる
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    // data.phpでインスタンスを作成→プロパティを定義
    // this(インスタンス名) -> プロパティ名 = インスタンスから渡された引数
  }
  
  public function getName() {
    return $this->name;
  }
  public function getImage() {
    return $this->image;
  }
  // プロパティを呼び出すための記述 それぞれ各インスタンスのname,imageを呼び出す
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
}
?>

<!-- プロパティが privateなのでclass内でしか定義できない -->