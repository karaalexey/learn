<?php

interface FruitsInterface
{
    public function itsFruits();
}
class Apple implements FruitsInterface
{
    private $inCar = '<br>We have apple';
    public function itsFruits()
    {
        echo $this->inCar;
    }
}
class Orange implements FruitsInterface
{
    private $inCar = '<br>We have orange';
    public function itsFruits()
    {
        echo $this->inCar;
    }
}
class Watermellow implements FruitsInterface
{
    private $inCar = '<br>We have watermellow';
    public function itsFruits()
    {
        echo $this->inCar;
    }
}
$fruit[] = new Apple();
$fruit[] = new Orange();
$fruit[] = new Watermellow();

foreach($fruit as $fruits){
    if($fruits instanceof FruitsInterface){
        $fruits->itsFruits();
    }
}
