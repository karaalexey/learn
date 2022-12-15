<?php

namespace lrn\structuralPattern\decorator;

class DayEveryday implements WhichDay
{
    public string $title = "Big Sale EveryDay ";
    public function showTitle() : string
    {
        return $this->title;
    }

}