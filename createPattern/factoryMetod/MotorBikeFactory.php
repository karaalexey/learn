<?php

class MotorBikeFactory extends BikeFactory
{
    public function createMotorBike(Int $wheels):BikeInterface
    {
        if($wheels == 3){
            return new MotorTripleBike();
        }
        return new MotorBike();
    }
}