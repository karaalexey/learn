<?php

namespace lrn\structuralPattern\flyweight;

class MacBookAir extends Product implements ProductInterface
{
    //4 варианта буков
    //1-12' spaceGray
    //2-12' black
    //3-14' spaceGray
    //4-14' black
    protected $price = 900;
    protected $color;
    protected $inch;
    private $name = "MacBookAir";

    /**
     * @param $color
     * @param $inch
     */
    public function __construct($color, $inch)
    {
        $this->color = strtolower($color);
        $this->inch = $inch;
        $this->price = $this->myPrice();
        echo "You first time buy this: " . $this->buy() . $this->amount ." ". $this->price ."$". PHP_EOL;


    }
    protected function myPrice()
    {
        if($this->inch > 12){
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