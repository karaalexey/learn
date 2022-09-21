<?php
abstract class Town{
    private $address;
    private $manyFloors;
    private $electriсity;
    private $water;
    protected $neighbor;


    public function getAddress()
    {return $this->address;}

    public function setAddress($address): void
    {$this->address = $address;}

    public function getManyFloors()
    {return $this->manyFloors;}

    public function setManyFloors($manyFloors): void
    {$this->manyFloors = $manyFloors;}

    public function getElectriсity()
    {return $this->electriсity;}

    public function setElectriсity($electriсity): void
    {$this->electriсity = $electriсity;}

    public function getWater()
    {return $this->water;}

    public function setWater($water): void
    {$this->water = $water;}

    public function getNeighbor()
    {return $this->neighbor;}

    public function setNeighbor($neighbor): void
    {$this->neighbor = $neighbor;}

}
class House extends Town{



}

?>