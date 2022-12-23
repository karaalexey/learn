<?php

namespace lrn\behaviorPattern\strategy;

class NightMode implements CssMode
{

    public $arrNight = ["backgroundcolor" => "black",
        "textcolor" => "white",
        "fontsize" => "12"];
    public function changeCss()
    {
        return $this->arrNight;
    }

}