<?php

class SquareButton extends Button
{
    public function __construct()
    {
        $this->setWidth($this->getHeigth());
    }
    public function setSide($height)
    {
        $this->setHeigth($height);
        $this->setWidth($height);
    }
}