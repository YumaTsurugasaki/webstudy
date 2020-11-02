<?php
class Person
{
  //プロパティの定義
  public $name;
  private $_gender;
  private $_birthday;

  //コンストラクタ
  function __construct($name, $gender, $birthday) {
    $this -> name = $name;
    $this -> _gender = $gender;
    $this -> _birthday = $birthday;
  }

  //メソッドの定義
  function get_age() {
    $age = floor((intval(date('Ymd')) - intval($this -> _birthday))/10000);
    return $age;
  }
}
?>
