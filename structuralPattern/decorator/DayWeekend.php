<?php

namespace lrn\structuralPattern\decorator;

class DayWeekend extends DayDecorator
{
    public function showTitle() : string
    {
        return "\n" . strtoupper($this->day->showTitle()) . "Sale -25" . "\n";
    }

}