<?php

//Это мой View
require 'ConnDB.php';
require 'AddMessage.php';
require 'Control.php';

$control = new Control();
//$control->setMessage();
$addMess = new AddMessage();
//$addMess = new AddMessage();->addMessageToDB($control->setMessage());
$conn = new ConnDB();
$conn->connect($addMess->addMessageToDB($control->setMessage()));


?>