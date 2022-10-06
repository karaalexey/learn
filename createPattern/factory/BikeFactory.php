<?php

class BikeFactory
{
    public function createVeloBike() : BikeInterface
    {
        return new VeloBike();
    }

    public function createMotorBike() : BikeInterface
    {
        return new MotorBike();
    }
}
