<?php

$name = "takumi";
if ($name = "takumi") {echo "私はtakumiです";}
else{echo "あなたはtakumiではありません";}

echo '<br>';

for ($i = 1; $i <= 10000; $i++) {$total += $i;}
echo $total;

echo '<br>';

$fruits = array("apple", "orange", "lemon","banana","peach");
foreach($fruits as $fruits){echo $fruits ; echo "\n";}
  
echo '<br>';

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++)
{if($i % 5 == 0){echo $i;}}


?>