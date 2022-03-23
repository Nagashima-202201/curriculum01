<?php

//ループ文 × 条件分岐
 $count = 0;
 $sum = 0;
 do {
 $count++;
 $num = mt_rand(1, 6);
 printf("%d回目 = %d<br>", $count, $num);
 $sum += $num;
 } while ($sum < 40);
 printf("合計%d回でゴールしました<br>", $count);

//関数 × 条件分岐
date_default_timezone_set('Asia/Tokyo');
 $time = date("H", time());
 echo "今 $time 時台です<br>";

if($time >=4 && $time<=11) {
  echo "おはようございます";
} elseif($time >=12 && $time<=16) {
  echo "こんにちは";
 }else {
  echo "こんばんは";
}