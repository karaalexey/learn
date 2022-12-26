<?php

include "../../vendor/autoload.php";

use lrn\behaviorPattern\state;

$myMail = new state\Mail();
$myMail->getState()->getStatus();
$myMail->makeNextState();
$myMail->getState()->getStatus();
$myMail->makeNextState();
$myMail->getState()->getStatus();
$myMail->makeNextState();
$myMail->getState()->getStatus();
echo PHP_EOL; // the next it's joke)))
$myMail->makeNextState();