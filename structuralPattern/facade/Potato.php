<?php

namespace lrn\structuralPattern\facade;

class Potato implements VegitablesInterface
{
public $name = "Potato";
public $haveNow = 500;
public $price = 7;
public $er = 0;

public function priceOnly(int $kg)
{
    if($kg <= $this->haveNow){
        $yourPrice = $kg*$this->price;
        return $yourPrice;
    }
    else{
        echo "Don't have this weight of $this->name, Sorry!";
        $this->er = 1;
        return $this->er;
    }
}
}