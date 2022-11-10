<?php

class Button implements PrototypeInterface
{
    private $width = 50;
    private $heigth = 20;


    public function __clone()
    {
    }
    public function setWidth ($width)
    {
        $this->width = $width;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setHeigth(int $heigth): void
    {
        $this->heigth = $heigth;
    }

    public function getHeigth(): int
    {
        return $this->heigth;
    }

    public function writeln()
    {
        echo $this->width;
        echo "\n";
        echo $this->heigth;
        echo "\n";
    }
}