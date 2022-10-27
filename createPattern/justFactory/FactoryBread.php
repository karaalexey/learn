<?php

class FactoryBread
{
    public static function makeBread($color, $weight): BreadInterface
    {
        return new ClassicBread($color, $weight);
    }
}