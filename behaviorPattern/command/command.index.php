<?php

include "../../vendor/autoload.php";

use lrn\behaviorPattern\command;

$onlineBot = new command\OnlineBot("Alex");
$invoker = new command\Invoker();
$invoker->setJobForBot(new command\WorkedBot($onlineBot));
$invoker->call();
$invoker->call();
$invoker->cancel();
$invoker->cancel();
$invoker->redo();
$invoker->redo();
$invoker->redo();
$invoker->call();

