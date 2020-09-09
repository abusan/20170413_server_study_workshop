<?php
$timezone = new DateTimeZone('Asia/Tokyo');

// DateTimeはミュータブルなのでmodifyメソッドを呼び出すと自身も変更されてしまう
$today = new DateTime('now', $timezone);

// first day ofで、その月の最初の日
// last day ofで、その月の最後の日
$start = $today->modify('first day of');
$end = $today->modify('last day of');

echo $today->format('Y-m-d');
echo "\n";
echo $start->format('Y-m-d');
echo "\n";
echo $end->format('Y-m-d');
echo "\n";
echo "\n";



// DateTimeImmutableはイミュータブルなのでmodifyメソッドを呼び出しても自身は変更されない
$today_immutable = new DateTimeImmutable('now', $timezone);

// first day ofで、その月の最初の日
// last day ofで、その月の最後の日
$start = $today_immutable->modify('first day of');
$end = $today_immutable->modify('last day of');

echo $today_immutable->format('Y-m-d');
echo "\n";
echo $start->format('Y-m-d');
echo "\n";
echo $end->format('Y-m-d');