<?php

include 'PrototypeInterface.php';
include 'Button.php';
include 'CirclButton.php';
include 'SquareButton.php';

//$standartBytton = new Button();
//echo "standartBytton: ";
//$standartBytton->writeln();
//$standartBytton2 = clone $standartBytton;
//echo "standartBytton Cloned: ";
//$standartBytton2->setWidth(100);
//$standartBytton2->writeln();
//
//$circleButton = new CirclButton();
//echo "circleButton: ";
//$circleButton->writeln();
//$circleButton2 = clone $circleButton;
//echo "circleButton Cloned: ";
//$circleButton2->setRadius(40);
//$circleButton2->writeln();
//echo "circleButton nonCloned again: ";
//$circleButton->writeln();

$squareButton = new SquareButton();
echo "SquareButton: ";
$squareButton->writeln();
$squareButton2 = clone $squareButton;
$squareButton2->setSide(30);
echo "SquareButton Cloned: ";
$squareButton2->writeln();
echo "Square Button nonCloned Again: ";
$squareButton->writeln();

