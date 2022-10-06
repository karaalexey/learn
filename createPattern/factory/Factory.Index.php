<?php

include 'BikeInterface.php';
include 'VeloBike.php';
include 'MotorBike.php';
include 'BikeFactory.php';

$bikeFactory = new BikeFactory();
$velo_bike = $bikeFactory->createVeloBike();
$motor_bike = $bikeFactory->createMotorBike();

$velo_bike->goRoad();
echo "\n";
$motor_bike->goRoad();