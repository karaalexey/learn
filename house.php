<?php
//Наследование

abstract class Town{
    private $address;
    private $manyFloors;
    private $electriсity;
    private $water;
    protected $neighbor;


//    public function getAddress()
//    {return $this->address;}

    public function setAddress($address): void
    {$this->address = $address;}

//    public function getManyFloors()
//    {return $this->manyFloors;}

    public function setManyFloors($manyFloors): void
    {$this->manyFloors = $manyFloors;}

//    public function getElectriсity()
//    {return $this->electriсity;}

    public function setElectriсity($electriсity): void
    {$this->electriсity = $electriсity;}

//    public function getWater()
//    {return $this->water;}

    public function setWater($water): void
    {$this->water = $water;}

//    public function getNeighbor()
//    {return $this->neighbor;}

    public function setNeighbor($neighbor): void
    {$this->neighbor = $neighbor;}

    public function ShowInfo(){
        echo "Address: " . $this->address . "<br>Floors: " . $this->manyFloors;
        echo "<br>Electricity: " . $this->electriсity . "<br>Water: " . $this->water;
        echo "<br>Neighbors: " . $this->neighbor . "<br>";

    }

}
class House extends Town{



}

$house1 = new House();
$house1->setAddress("Ukrain");
$house1->setManyFloors(5);
$house1->setElectriсity("Have, good power");
$house1->setWater("Have, clean");
$house1->setNeighbor("Not so many, but very nice people");
$house1->ShowInfo();

?>