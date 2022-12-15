<?php

namespace lrn\structuralPattern\facade;

class Potato implements VegitablesInterface
{
public $name = "Potato";
public $haveNow = 500;
protected $price = 7;

public function priceOnly(int $kg)
{
    if($kg <= $this->haveNow){
        $yourPrice = $kg*$this->price;
        return $yourPrice;
    }
    else{
        echo "Don't have this weight of $this->name, Sorry!";
    }
}
}