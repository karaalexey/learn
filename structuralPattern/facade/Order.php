<?php

namespace lrn\structuralPattern\facade;

class Order
{
    protected $vegitables;
    protected $kg;
    protected $city;
    public $price;
    public $deli;
    public $name;
    public $deliver;


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
        $this->deliver = $this->deli->priceForDeli();
        if($this->deliver == 0){
            echo "Bad city";
            echo "\n";
        } else if ($this->vegitables->priceOnly($this->kg) != 1) {
            $this->price = $this->vegitables->priceOnly($this->kg);
            $this->name = $this->vegitables->name;
            echo "You total price for $this->name : " . $this->price + $this->deliver . "; Delivery to $this->city";
            echo "\n";
        } else {
            $this->name = $this->vegitables->name;
            echo "Don't have this weight of $this->name , Sorry!";
            echo "\n";
        }


    }
}