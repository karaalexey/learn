<?php

namespace lrn\structuralPattern\bridge;

class Mac implements Comp
{
    public function selected()
    {
        echo "You selected some object";
        echo "\n";
    }

    public function viewProperties()
    {
        echo "Yuo see properties of selected object";
        echo "\n";
    }

    public function scrollUp()
    {
        echo "You scroll this page to Up";
        echo "\n";
    }

    public function scrollDown()
    {
        echo "You scroll this page to Down";
        echo "\n";
    }

    public function collOperation()
    {
        $this->helloSiry();
    }
    public function helloSiry()
    {
        echo "Hi. I'm Siry. How i can help you?)";
        echo "\n";
    }

}