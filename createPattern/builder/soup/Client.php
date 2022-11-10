<?php

include 'SoupBuilderInterface.php';
include 'ChikenSoupBuilder.php';
include 'RedSoupBuilder.php';
include 'Cook.php';

$cook1 = new Cook();
$chik = new ChikenSoupBuilder();
$red = new RedSoupBuilder();
$soupChicken = $cook1->cookingChickenSoup($chik);
$soupRed = $cook1->cookingRedSoup($red);
$friedPotato = $cook1->cookingFriedPotato($chik);

echo $soupChicken;
echo "\n";
echo $soupRed;
echo "\n";
echo $friedPotato;