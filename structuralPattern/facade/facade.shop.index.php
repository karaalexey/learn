<?php



include "../../vendor/autoload.php";
/* В классе Order в конструкторе можно убрать вызов метода TotalPrice, тогда можно будет вызывать методы по отдельности*/

$apple = new \lrn\structuralPattern\facade\Apple();
$orderApple = new \lrn\structuralPattern\facade\Order($apple,20,"Kiev");
echo  "price for delivery of your apple: " . $orderApple->deliver . "\n";
// пример:
echo "$orderApple->deliver + $orderApple->price = " . $orderApple->deliver+$orderApple->price . "\n";

$potatos = new \lrn\structuralPattern\facade\Potato();
$orderPotato = new \lrn\structuralPattern\facade\Order($potatos, 100, "Kherson");
echo "price of your potato: " . $orderPotato->price . "\n";

$potatos2 = new \lrn\structuralPattern\facade\Potato();
$orderPotato = new \lrn\structuralPattern\facade\Order($potatos2, 150, "nenene");

$apple2 = new \lrn\structuralPattern\facade\Apple();
$orderPotato = new \lrn\structuralPattern\facade\Order($apple2, 100, "Kherson");
echo $apple->name . " " .$apple->price;
echo "\n";
echo $potatos->name . " " . $potatos->haveNow;

//стоимость доставки за минимальный объем
$orderApple = new \lrn\structuralPattern\facade\Order($apple, 0, "Kiev");

//стоимость товара с минимум 1 км доставки(например по городу курьером)
$orderApple = new \lrn\structuralPattern\facade\Order($apple, 20, "0");

//стоимость товара без доставки
echo $orderApple->price;