<?php

namespace lrn\structuralPattern\facade;

class Apple implements VegitablesInterface
{
public $name = "Apple";
public $haveNow = 50;
public $price = 10;
public $er = 0;

public function priceOnly(int $kg)
{
    if($kg < $this->haveNow){
        $yourPrice = $kg*$this->price;
        return $yourPrice;
    }
    else{
        //exit;
        $this->er = 1;
        return $this->er;
    }
}
}