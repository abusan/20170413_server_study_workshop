<?php
$timezone = new DateTimeZone('Asia/Tokyo');
$today = new DateTimeImmutable('now', $timezone);

$three_days = new DateInterval('P3D');
$two_weeks = new DateInterval('P2W');
$one_hours = new DateInterval('PT1H');

// 3日前
echo $today->add($three_days)->format('Y-m-d H:i:s')."\n";

// 2週間前
echo $today->sub($two_weeks)->format('Y-m-d H:i:s')."\n";

// 1時間後
echo $today->add($one_hours)->format('Y-m-d H:i:s')."\n";