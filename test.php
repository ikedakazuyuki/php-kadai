<?php
 echo "hello php";


 $height = 160;
if ($height < 150) {
  echo "乗車不可";
} else {
  echo "ご乗車になれます";
}

$height = 230;
if ($height < 150){
  echo"150cm 未満の方はご乗車できません";
} else if ($height >= 200){
  echo "200cm　以上の方はご乗車出来ません";
} else {
  echo"ご乗車になれます";
}

$weekday = "月曜";
switch ($weekday) {
  case "月曜";
  echo"可燃ゴミの日です。";
  break;
  case "水曜";
  echo "資源ごみの日です";
  break;
  default;
  echo "回収はありません";
  break;
}

for($i =0; $i < 10; $i++){
  echo $i;
}

$total = 0;
echo $total;

for($a = 0; $a <= 100; $a++){
  $total += $a;
}
echo $total;



$name = "kazuyuki";
if ($name == "kazuyuki"){
  echo "私はあなたの名前です";
} else "あなたの名前ではありません";
echo "\n";



$total = 0;

for($b = 0; $b <=10000; $b++){
  $total += $b;
}
echo $total;
echo "\n";



$fruits = array("apple","orange","banana","remon","cherry");
foreach($fruits as $fruits){
  echo "要素は". $fruits;
  echo "\n";
}


$start = 5;
$end = 100;

for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}


