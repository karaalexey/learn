<?php

namespace lrn\structuralPattern\bridge;

class Mouse implements Cursor
{
    private $comp;
    public function __construct(Comp $comp)
    {
        $this->comp = $comp;
    }

    public function select()
    {
        echo "Press left button";
        echo "\n";
        $this->comp->selected();
    }

    public function properties()
    {
        echo "Press right button";
        echo "\n";
        $this->comp->viewProperties();
    }

    public function scrollUp()
    {
        echo "Scroll wheel Up";
        echo "\n";
        $this->comp->scrollUp();
    }

    public function scrollDown()
    {
        echo "Scroll wheel Down";
        echo "\n";
        $this->comp->scrollDown();
    }
    public function sideButton()
    {
        echo "Press side button";
        echo "\n";
        $this->comp->collOperation();
    }
}