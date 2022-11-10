<?php

class CirclButton extends Button
{
    private $radius = 50;
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function writeln()
    {
        parent::writeln();
        echo "Radius: ";
        echo $this->radius;
        echo "\n";
    }
}