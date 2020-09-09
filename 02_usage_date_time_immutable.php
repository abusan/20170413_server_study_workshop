<?php
$today         = new DateTimeImmutable();              // 現在時刻
$today2        = new DateTimeImmutable('now');         // 現在時刻
$one_years_ago = new DateTimeImmutable('2018-04-13');  // 指定した日付(時刻は0時0分0秒)
$time          = new DateTimeImmutable('19:40:35');    // 指定した時刻

echo $today->format('Y-m-d H:i:s')."\n";
echo $today2->format('Y-m-d H:i:s')."\n";
echo $one_years_ago->format('Y-m-d H:i:s')."\n";
echo $time->format('Y-m-d H:i:s')."\n";

// 差を計算
echo $today->diff($one_years_ago)->format('%a days')."\n";

// 逆にすると？
echo $one_years_ago->diff($today)->format('%a days')."\n";

// 比較
// PHP5.2以降なら比較演算子で比較できます
$date1 = new DateTimeImmutable("now");
$date2 = new DateTimeImmutable("tomorrow");
var_dump($date1 == $date2);
var_dump($date1 < $date2);
var_dump($date1 > $date2);
