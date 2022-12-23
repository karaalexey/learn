<?php

include "../../vendor/autoload.php";

$strategyPage = new \lrn\behaviorPattern\strategy\MyPage();
$strategyPage->changeMode(new \lrn\behaviorPattern\strategy\DayMode());
echo PHP_EOL;
$strategyPage->changeMode(new \lrn\behaviorPattern\strategy\NightMode());