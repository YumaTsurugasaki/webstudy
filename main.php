<?php

require 'Person.class.php';


function output($name){
  echo '文字列　：　', $name, PHP_EOL;
  #print '<br>';
  $name = '鈴木';
  echo '上書き文字列　：　', $name, PHP_EOL;
  #print '<br>';

  $num = 20;
  echo '数字　：　', $num, PHP_EOL;
  #print '<br>';
  $num = 12;
  echo '上書き数字　：　', $num, PHP_EOL;
  #print '<br>';

  $null = NULL;
  echo 'null　：　', $null, PHP_EOL;
  #print '<br>';
  $null = 'a';
  echo '上書きnull　：　', $null, PHP_EOL;
  #print '<br>';
}

function output_array(){
  $family = ['dad', 'mom', 'son', 'daughter'];
  echo 'array　：　', $family, PHP_EOL;
  $family[] = 'puppy';
  echo '上書きarray　：　', $family, PHP_EOL;

  $family_name = [
    'dad' => 'Bob',
    'mom' => 'Jessy',
    'son' => 'James',
    'daughter' => 'Emily'
  ];
  echo '連想array　：　', $family_name['dad'], PHP_EOL;
  $family_name['puppy'] = 'John';
  echo '上書き連想array　：　', $family_name['puppy'], PHP_EOL;

}

function control(){
  $num = ['2', '10', '1', '4'];
  $family_name = [
    'dad' => 'Bob',
    'mom' => 'Jessy'
  ];

  for ($i = 0; $i <= count($num); $i++) {
    if ($num[$i] > 5) {
      echo '5より大きい', PHP_EOL;
    } elseif ($num[$i] > 3) {
      echo '3より大きく、5以下', PHP_EOL;
    } else {
      echo '3以下', PHP_EOL;
    }
  }

  $count = 0;
  while($count<=5){
    print $count;
    $count++;
  }

  foreach($family_name as $key => $value){
    echo $key , 'の名前は' , $value , 'です', PHP_EOL;
  }

}

function built_in(){
  print("こんにちは");
  echo "こんばんは", PHP_EOL;
  echo strlen("おはようございます"), PHP_EOL;
  $text = '地球はの丸い';
  echo str_replace('丸い', '四角い', $text), PHP_EOL;
  echo implode(":::::::", array("みかん", "りんご", "スイカ")), PHP_EOL;
}

function reference_sub(&$ref, $val)
{
    $ref += 5;
    $val += 10;
    echo '$ref = ', $ref, PHP_EOL;
    echo '$val = ', $val, PHP_EOL;
}







$name = '佐々木';
output($name);
output_array();
control();
built_in();

$a = 1;
$b = 2;
echo reference_sub($a, $b);
echo '$a = ', $a, PHP_EOL;
echo '$b = ', $b, PHP_EOL;



$john = new Person('John Smith', 'male', '19820312');
echo '名前: ' . $john->name . '<br>';  # publlic
//echo '性別: ' . $john_smith->_gender ;  //エラーになる
echo '年齢: ' . $john->get_age() . '才<br>';

?>
