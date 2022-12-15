<?php

namespace lrn\structuralPattern\decorator;

class DayHollyday extends DayDecorator
{
    public function showTitle() : string
    {
        return strtoupper("Very Very " . $this->day->showTitle() . "SALE-sale -50") . "\n";
    }

}