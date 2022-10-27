<?php

abstract class BikeFactory
{
    public function createVeloBike() : BikeInterface
    {
        return new VeloBike();
    }

    abstract public function createMotorBike(Int $wheels) : BikeInterface;

       // return new MotorBike();

}
