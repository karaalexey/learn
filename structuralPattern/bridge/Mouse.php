<?php

namespace lrn\structuralPattern\bridge;

class Mouse implements Cursor
{
    public function select()
    {
        echo "Press left button";
    }

    public function properties()
    {
        echo "Press right button";
    }

    public function scrollUp()
    {
        echo "Scroll wheel Up";
    }

    public function scrollDown()
    {
        echo "Scroll wheel Down";
    }


    public function sideButton()
    {
        echo "Press side button";
    }

}