<?php
$date = DateTimeImmutable::createFromFormat('U', time());
echo $date->format('Y-m-d H:i:s');
echo "\n";

$date = DateTimeImmutable::createFromFormat('YmdH', '2017041319');
echo $date->format('Y-m-d H:i:s');
