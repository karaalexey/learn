<?php

include "../../vendor/autoload.php";

$basket = new \lrn\structuralPattern\flyweight\BasketFlyweightFactory();
$basket->addToBasket("MacBookPro", "Black", 13);
$basket->addToBasket("MacBookAir", "SpaceGray", 14);
$basket->addToBasket("MacBookPro", "Black", 13);
$basket->addToBasket("MacBookAir", "Black", 14);
$basket->addToBasket("MacBookPro", "Black", 13);

