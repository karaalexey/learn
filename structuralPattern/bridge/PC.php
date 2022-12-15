<?php

namespace lrn\structuralPattern\bridge;

class PC implements Comp
{
    public function selected()
    {
        echo "You selected some object";
        echo "\n";
    }

    public function viewProperties()
    {
        echo "Yuo see little page of properties of selected object";
        echo "\n";
    }

    public function scrollUp()
    {
        echo "You scroll this page Up 10%";
        echo "\n";
    }

    public function scrollDown()
    {
        echo "You scroll this page Down 10%";
        echo "\n";
    }

    public function collOperation()
    {
        $this->globalSearch();
    }
    private function globalSearch()
    {
        echo "Now you opened global search";
        echo "\n";
    }

}