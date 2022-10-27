<?php

include 'BikeInterface.php';
include 'VeloBike.php';
include 'MotorBike.php';
include 'MotorTripleBike.php';
include 'BikeFactory.php'; //abstract
include 'MotorBikeFactory.php';

$bikeFactory = new MotorBikeFactory();
$velo_bike = $bikeFactory->createVeloBike();
$motor_bike = $bikeFactory->createMotorBike(2);
$motor_bikeTriple = $bikeFactory->createMotorBike(3);

$velo_bike->goRoad();
echo "\n";
$motor_bike->goRoad();
echo "\n";
$motor_bikeTriple->goRoad();