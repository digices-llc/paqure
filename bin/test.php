<?php

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'autoload.php';

print_r(get_declared_classes());

date_default_timezone_set ( 'America/Denver' );

echo "actual posix time: ".date('U').PHP_EOL;

echo 'Date object with no arguments (current date and time):'.PHP_EOL;
$currentDate = new \digices\paqure\Date();
print_r($currentDate);

echo 'Date object with integer argument:'.PHP_EOL;
$dateFromInt = new \digices\paqure\Date(1523796480);
print_r($dateFromInt);

echo 'Date object generated from mysql time:'.PHP_EOL;
$oldDate = new \digices\paqure\Date($dateFromInt->mysql);
print_r($oldDate);
