<?php

class Dog extends Animal
{

  //鳴き声を得るメソッド
  public function call(): string
  {
    return "わんわん";
  }

  public function printName(): void
  {
      echo '犬の';
      print parent::printName();
  }
}

?>
