<?php

namespace lrn\structuralPattern\decorator;

abstract class DayDecorator implements WhichDay
{
    protected $day;

    public function __construct(WhichDay $day)
    {
        $this->day = $day;
    }



}