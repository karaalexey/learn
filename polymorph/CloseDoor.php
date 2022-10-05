<?php

//полиморфизм2

interface CloseDoorInterface
{
public function uMustCloseDoor();
}

class StayAtHome implements CloseDoorInterface
{
    public function uMustCloseDoor()
    {
        echo 'If you stay at home, you must close the door <br>';
    }
}

class GoFromHome implements CloseDoorInterface
{
    public function uMustCloseDoor()
    {
        echo 'If you go from home, you must close the door <br>';
    }
}

$door1 = new StayAtHome();
$door2 = new GoFromHome();
$door1->uMustCloseDoor();
$door2->uMustCloseDoor();