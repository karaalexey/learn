<?php

namespace lrn\structuralPattern\facade;

class Delivery implements DeliveryInterface
{
    private $kg;
    private $city;
    private $far = ["Kherson"=>500,
                    "Khmelnitsk"=>100,
                    "Odessa"=>400,
                    "Kiev"=>300];
    private $km = 0;
//    public $deliPrice;
    public function __construct($kg, $city)
    {
        $this->kg = $kg;
        $this->city = $city;
    }
    public function howFar()
    {
        foreach ($this->far as $key => $value){

            if($key == $this->city){
                $this->km = $value;
                return $this->km;
            }


        }
    }

    public function priceForDeli()
    {
        $myKm = $this->howFar();
        $deliPrice = $this->kg*0.01*$myKm;
        return $deliPrice;
    }

}