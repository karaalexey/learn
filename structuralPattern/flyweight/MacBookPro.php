<?php

namespace lrn\structuralPattern\flyweight;

class MacBookPro extends Product implements ProductInterface
{
    //4 варианта буков
    //1-13' spaceGray
    //2-13' black
    //3-16' spaceGray
    //4-16' black
    protected $price = 1000;
    protected $color;
    protected $inch;
    private $name = "MacBookPro";

    /**
     * @param $color
     * @param $inch
     */
    public function __construct($color, $inch)
    {
        $this->color = strtolower($color);
        $this->inch = $inch;
        $this->price = $this->myPrice();
        echo "You first time buy this: " . $this->buy() . $this->amount ." ". $this->price."$" . PHP_EOL;
    }

    public function getPrice()
    {
        return $this->price*$this->amount;
    }
    protected function myPrice()
    {
        if($this->inch > 13){
            $this->price = $this->price+300;
            return $this->price;
        } elseif ($this->color = "black"){
            $this->price = $this->price+100;
            return $this->price;
        }
        return $this->price;

    }



    public function buy() :string
    {
        return $this->name . " $this->color - $this->inch' amount: ";
    }

}