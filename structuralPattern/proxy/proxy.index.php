<?php

include "../../vendor/autoload.php";

$proxyConn = new \lrn\structuralPattern\proxy\ProxyConnect(new \lrn\structuralPattern\proxy\ConnToDB());
$proxyConn->connectDB("pass");
$proxyConn->connectDB(1);
$proxyConn->connectDB("sql -1-1");
$proxyConn->connectDB("1");











//$proxyConn->access("SQL");
//$proxyConn->connectDB();
//echo PHP_EOL;
//$proxyConn->access("1");
//$proxyConn->connectDB();
//echo PHP_EOL;
//$proxyConn->access("pass");
//$proxyConn->connectDB();


