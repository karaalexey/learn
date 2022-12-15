<?php

use lrn\structuralPattern\composite;

include "../../vendor/autoload.php";


$compForUser2202 = new composite\SetPC();

$compForUser2202->addDevices(new composite\Frame("Special Game G5"));
$compForUser2202->addDevices(new composite\PowerSupply("ATX MaxPower 800"));
$compForUser2202->addDevices(new composite\MotherBoard("Asus Rock 1255 with Core I7 7-th"));
$compForUser2202->addDevices(new composite\VideoCard("RTX-3090"));
$compForUser2202->addDevices(new composite\Memory("Kingston ddr4 8gb", 2));
$compForUser2202->addDevices(new composite\HhdSsd("Kingston SSD 240gb", 2));

var_dump($compForUser2202->connect());
echo "\n";
echo $compForUser2202->connect();
