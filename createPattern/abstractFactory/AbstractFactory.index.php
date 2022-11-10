<?php

include 'SmokeFactoryInterface.php';
include 'SmokeFactorySuper.php';
include 'SigaretsInterface.php';
include 'IqsHeetsInterface.php';
include 'GloStickInterface.php';
include 'BlueSmokeFactory.php';
include 'GloStickBlue.php';
include 'GloStickRed.php';
include 'IqsHeetsRed.php';
include 'IqsHeetsBlue.php';
include 'SigaretsBlue.php';
include 'SigaretsRed.php';
include 'RedSmokeFactory.php';

//function create (SmokeFactoryInterface $factory)
//{
//    $factory->createIqsHeets();
//    $factory->
//}

$redHeets = new RedSmokeFactory();
$redHeets->createIqsHeets()->create();
$blueStick = new BlueSmokeFactory();
$blueStick->createGloStick()->create();


