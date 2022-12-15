<?php

namespace lrn\structuralPattern\facade;

class Order
{
    protected $vegitables;
    protected $kg;
    protected $city;
    public $price;
    public $deli;


    public function __construct(VegitablesInterface $vegitables, $kg, $city)
    {
        $this->vegitables = $vegitables;
        $this->kg = $kg;
        $this->city = $city;
        $this->totalPrice();
    }
    public function totalPrice()
    {
        $this->deli = new Delivery($this->kg, $this->city);
        $deliver = $this->deli->priceForDeli();
        if($deliver == 0){
            echo "Bad city";
            echo "\n";
        } else {
            $this->price = $this->vegitables->priceOnly($this->kg);
            $name = $this->vegitables->name;
            echo "You total price for $name : " . $this->price + $deliver;
            echo "\n";
        }

    }
}