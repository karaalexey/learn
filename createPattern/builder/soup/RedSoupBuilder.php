<?php

class RedSoupBuilder implements SoupBuilderInterface
{
    protected $redSoup;

    public function reset(): SoupBuilderInterface
    {
        //$this->redSoup = new RedSoupBuilder();
        $this->redSoup = "Pot with hot water, ";
        return $this;
    }

    public function firstIngridients(array $first): SoupBuilderInterface
    {
        //$this->reset();
        $this->redSoup .= " first we add " . implode(", ", $first);
        return $this;
    }

    public function secondIngridients(array $second): SoupBuilderInterface
    {
        $this->redSoup .= " secondn time we add " . implode(", ", $second);
        return $this;
    }

    public function lastIngridients(array $last): SoupBuilderInterface
    {
        $this->redSoup .= " and before finish we add " . implode(", ", $last);
        return $this;
    }

    public function getSoup(): string
    {
        return $this->redSoup;
    }


}