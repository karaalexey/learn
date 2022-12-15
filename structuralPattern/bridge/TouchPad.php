<?php

namespace lrn\structuralPattern\bridge;

class TouchPad implements Cursor
{
    private $comp;
    public function __construct(Comp $comp)
    {
        $this->comp = $comp;
    }
    public function select()
    {
        echo "Press one finger";
        echo "\n";
        $this->comp->selected();
    }

    public function properties()
    {
        echo "Press two fingers";
        echo "\n";
        $this->comp->viewProperties();
    }

    public function scrollUp()
    {
        echo "Scroll two fingers to Up";
        echo "\n";
        $this->comp->scrollUp();
    }

    public function scrollDown()
    {
        echo "Scroll two fingers to Down";
        echo "\n";
        $this->comp->scrollDown();
    }


    public function treeFingers()
    {
        echo "Press tree fingers";
        echo "\n";
        $this->comp->collOperation();
    }

}