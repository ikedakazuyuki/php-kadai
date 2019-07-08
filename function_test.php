<?php
echo "hello";

function sum($max){
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
}

echo sum(100);
echo "\n";

function print_number(){
  for($i = 0; $i < 100; $i++){
    echo $i;
  }
}



$string = "ABCDEF";
echo strlen($string)
?>

<?php


$string = "I love Ruby!";

$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;

/*
    ここから下は課題 
    
    
    ctl+L ターミナルの一番下を頭に
*/

?>

<?php

function square($number) {
    $number = $number * 2;
    return $number;
}

$x = square(10);

echo $x; 
echo "\n";
?>

<?php

/* 課題２*/


function f($a,$b){
  $sum = $a + $b;
  return $sum;
}
  $result = f(2,2);
  
  echo $result;
  echo "\n";
  
  
/* 課題3*/

 $array =  array(1, 3, 5, 7, 9,10);
 function multi($arr){
    $result=1;
    foreach($arr as $number){
      $result = $result *$number;  
    } 
    return $result;
   
 }
 

 echo multi($array);


//課題４//


function max_array($arr) {
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a ){
      $max_number = $a;
    }
  }
  return $max_number;
}

$arr = array(0,1,12,3,4,);

echo max_array($arr);

 //課題５//
 
 