<?php

use lrn\structuralPattern\decorator;

include "../../vendor/autoload.php";

$day = new decorator\DayEveryday();
echo $day->showTitle();

$saturday = new decorator\DayWeekend($day);
echo $saturday->showTitle();

$marryChristmas = new decorator\DayHollyday($day);
echo $marryChristmas->showTitle();

