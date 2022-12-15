<?php

namespace lrn\structuralPattern\facade;

class Apple implements VegitablesInterface
{
public $name = "Apple";
public $haveNow = 50;
protected $price = 10;

public function priceOnly(int $kg)
{
    if($kg < $this->haveNow){
        $yourPrice = $kg*$this->price;
        return $yourPrice;
    }
    else{
        echo "Don't have this weight of $this->name, Sorry!";
        exit;
    }
}
}