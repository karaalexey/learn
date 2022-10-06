<?php

require 'ConnDB.php';
require 'AddMessage.php';
require 'View.php';

$view = new View();
$connection = new ConnDB();
$inputMess = $view->setMessage();
$addMess = new AddMessage();
$messToSql = $addMess->addMessageToDB($inputMess);
$connection->connect($messToSql);

?>