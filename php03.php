<?php

function sum($max) {
    $result = 0;

    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }

    return $result;
}

echo sum(100) . "\n";

echo '<br>';

function f($x){
    $value = 2 * $x;
    return $value;
}

echo f(5) . "\n";

echo '<br>';

function g($a, $b){
    $plus = $a + $b;
    return $plus;
}

echo g(100,200) . "\n";

echo '<br>';

function h($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i]; 
    }
    return $result;
}
echo h(array(1, 3, 5 ,7, 9)) . "\n";

echo '<br>';

function max_array($arr){ 
    $max_number = $arr[0]; 
    foreach($arr as $a){ 
             if($max_number < $a){ 
                $max_number = $a; 
            } 
    } 
    return $max_number; 
} 
echo max_array(array(3, 4, 7, 1, 9)) . "\n";

//strip_tags  
$text="<h1>お疲れ様です</h1>";  
echo $text;  
echo strip_tags($text);  
echo "\n";  
  
  
//array_push  
$arrold = array('1','2','3');  
array_push($arrold,'4','9','7');  
print_r ($arrold);  
echo "\n";  
  

//array_merge  
$arrold = array('1','2','3');  
$arrfix = array('4','5','6');  
$result = array_merge($arrold,$arrfix);  
print_r($result);  
echo "\n";  


//time, mktime  
echo '現在のUnixタイムスタンプ：'.time();  
echo "\n";  


//mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )  
echo '指定のUnixタイムスタンプ：'.mktime(16, 4, 50, 9, 7, 2020);  
echo "\n";  
 
 
//date  
$week = [  
      '日', //0  
      '月', //1  
      '火', //2  
      '水', //3  
      '木', //4  
      '金', //5  
      '土', //6  
    ];  
  $date = date('w');  
  echo $week[$date] . '曜日';  
  ?>  
  

?>
