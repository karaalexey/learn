<?php

namespace lrn\behaviorPattern\strategy;

class DayMode implements CssMode
{
    public $arrDay = ["backgroundcolor" => "white",
                            "textcolor" => "black",
                            "fontsize"=> "10"];

    public function changeCss()
    {
        return $this->arrDay;
    }

}