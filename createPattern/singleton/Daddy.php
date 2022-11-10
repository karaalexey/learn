<?php

final class Daddy
{
    private static $instance;
    private function __construct()
    {
        echo "You have just one Daddy!";
    }
   // private function __wakeup(){}
    private function __clone(){}

    public static function getDaddy(): Daddy
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}
$alex = Daddy::getDaddy();
$john = Daddy::getDaddy();
//var_dump($alex);
//var_dump($john);