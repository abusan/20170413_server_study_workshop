<?php
$timezone = new DateTimeZone('Asia/Tokyo');
$timezone = new DateTimeZone('Europe/London');
$timezone = new DateTimeZone('+0900');

// タイムゾーンにロンドンを指定して現地の時刻を取得
$timezone = new DateTimeZone('Europe/London');
$date = new DateTimeImmutable('now', $timezone);
echo $date->format('Y-m-d H:i:s');