<?php

// 回数指定
print_r(array_map(
    function ($date) { return $date->format('Y-m-d'); },
    iterator_to_array(new \DatePeriod(
        new DateTimeImmutable('2017-04-01'),    // 開始日時
        new DateInterval('P1D'),                // 反復間隔
        3                                       // 反復回数
    ))
));


// 開始、終了日時の指定
print_r(array_map(
    function ($date) { return $date->format('Y-m-d'); },
    iterator_to_array(new \DatePeriod(
        new DateTimeImmutable('2017-04-01'), // 開始日時
        new DateInterval('P1D'),             // 反復間隔
        new DateTimeImmutable('2017-04-30')  // 終了日時
    ))
));


// ISO形式での指定
print_r(array_map(
    function (\DateTimeInterface $date) { return $date->format('Y-m-d'); },
    iterator_to_array(new \DatePeriod('2017-04-01T00:00:00Z/P1D/2017-04-30T00:00:00Z'))
));