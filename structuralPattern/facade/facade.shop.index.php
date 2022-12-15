<?php



include "../../vendor/autoload.php";

$apple = new \lrn\structuralPattern\facade\Apple();
$orderApple = new \lrn\structuralPattern\facade\Order($apple,20,"Kiev");

$potatos = new \lrn\structuralPattern\facade\Potato();
$orderPotato = new \lrn\structuralPattern\facade\Order($potatos, 100, "Kherson");

$potatos2 = new \lrn\structuralPattern\facade\Potato();
$orderPotato = new \lrn\structuralPattern\facade\Order($potatos2, 150, "nenene");

$apple2 = new \lrn\structuralPattern\facade\Apple();
$orderPotato = new \lrn\structuralPattern\facade\Order($apple2, 100, "Kherson");