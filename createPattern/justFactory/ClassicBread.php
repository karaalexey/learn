<?php

class ClassicBread implements BreadInterface
{
    protected $color;
    protected $weight;

    public function __construct(String $color, String $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

}