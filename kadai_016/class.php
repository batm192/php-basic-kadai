<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎講座</title>
</head>

<body>
  <?php
  class food
  {
    private $name;
    private $price;
    public function __construct(string $name, int $price)
    {
      $this->name = $name;
      $this->price = $price;
    }
    public function show_price()
    {
      echo $this->price . '</br>';
    }
  }
  class animal
  {
    private $name;
    private $height;
    private $weight;
    public function __construct(string $name, int $height, int $weight,)
    {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    public function show_height()
    {
      echo $this->height . '</br>';
    }
  }

  $food = new food('バナナ', 300);
  $food->show_price();

  $animal = new animal('インコ', 15, 50,);
  $animal->show_height();

  ?>

</body>

</html>