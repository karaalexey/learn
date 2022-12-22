<?php

namespace lrn\structuralPattern\flyweight;

abstract class Product
{
    //protected $price;
    public $amount = 1;

    public function setAmount(): int
    {
        $this->amount = $this->amount+1;
        return $this->amount;
    }


}