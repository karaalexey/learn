<?php

namespace lrn\behaviorPattern\chain;

class Errors
{

    public function noSent()
    {
        echo "You write message, but not sent him!".PHP_EOL;

    }
    public function exitErrors()
    {
        exit("Sorry! You wrong! Try again or try later!..");
    }

}