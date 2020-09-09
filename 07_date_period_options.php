<?php
// 開始日を除外する
// DatePeriod::EXCLUDE_START_DATE
print_r(array_map(
    function ($date) { return $date->format('Y-m-d'); },
    iterator_to_array(new DatePeriod(
        new DateTimeImmutable('2017-04-01'), // 開始日時
        new DateInterval('P1D'),             // 反復間隔
        new DateTimeImmutable('2017-04-30'), // 終了日時
        DatePeriod::EXCLUDE_START_DATE
    ))
));


// 終了日を含む
// DateIntervalクラスで加算する
print_r(array_map(
    function ($date) { return $date->format('Y-m-d'); },
    iterator_to_array(new DatePeriod(
        new DateTimeImmutable('2017-04-01'), // 開始日時
        new DateInterval('P1D'),             // 反復間隔
        (new DateTimeImmutable('2017-04-30'))->add($interval) // 終了日時
    ))
));