<?php

namespace lrn\structuralPattern\flyweight;

include "../../vendor/autoload.php";

class BasketFlyweightFactory
{
    private array $basket = [];

    public function addToBasket(string $name, string $color, int $inch)
    {
        if(!isset($this->basket[$name.$color.$inch])){
            $this->basket[$name.$color.$inch] = $this->addNew($name, $color, $inch);
        } else
//        $pieces = $this->basket[$name.$color.$inch]->setAmount();
        echo "Now you buy $name $color $inch' - " . $this->basket[$name.$color.$inch]->setAmount() . " pieces,  ".$this->basket[$name.$color.$inch]->getPrice()."$" . PHP_EOL;
    }

    protected function addNew($name, $color,$inch)
    {
        if($name == "MacBookPro"){
            return new MacBookPro($color, $inch);
        }
        elseif ($name == "MacBookAir"){
            return new MacBookAir($color,$inch);
        } else
        return "You Wrong" . PHP_EOL;
    }
}