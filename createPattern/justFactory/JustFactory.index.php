<?php

include 'BreadInterface.php';
include 'ClassicBread.php';
include  'FactoryBread.php';

$bread = FactoryBread::makeBread('white', 'big');
echo "Color: ". $bread->getColor()."\n";
echo "Weight: ". $bread->getWeight();
