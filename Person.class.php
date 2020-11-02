<?php
class Person
{
  //プロパティの定義
  public $name;        #どこからでも
  protected $_gender;  #クラス自身と継承クラスのみ
  private $_birthday;  #同じクラスのみ

  //コンストラクタ
  function __construct($name, $gender, $birthday) {
    $this -> name = $name;
    $this -> _gender = $gender;
    $this -> _birthday = $birthday;
  }

  //デストラクタ
  function __destruct() {
        print "Destruct Called ";
  }

  //メソッドの定義
  function get_age() {
    $age = floor((intval(date('Ymd')) - intval($this -> _birthday))/10000);
    return $age;
  }
}
?>
