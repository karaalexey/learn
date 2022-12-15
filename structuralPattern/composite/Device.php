<?php

namespace lrn\structuralPattern\composite;

abstract class Device
{
    private $named;

    public function __construct($named)
    {
        $this->named = $named;
    }

    public function getNamed() : string
    {
        return $this->named . PHP_EOL;
    }

}

