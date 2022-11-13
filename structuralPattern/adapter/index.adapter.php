<?php

use lrn\structuralPattern\adapter\AdapterHebrewMessage;

include "../../vendor/autoload.php";

$englishMessage = new lrn\structuralPattern\adapter\EnglishMessage();
$englishMessage->showMessage("Hello World");
$hebrewMessage = new AdapterHebrewMessage(new lrn\structuralPattern\adapter\HebrewMessage());
$hebrewMessage->showMessage("dlroW olleH");
$hebrewMessage->showMessage("It's Work");