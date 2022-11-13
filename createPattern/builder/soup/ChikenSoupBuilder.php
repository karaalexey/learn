<?php

class ChikenSoupBuilder implements SoupBuilderInterface
{
    protected $chikenSoup;

    public function reset(): SoupBuilderInterface
    {
        //$this->chikenSoup = new ChikenSoupBuilder();
        $this->chikenSoup = '';
        return $this;
    }

    public function firstIngridients(array $first): SoupBuilderInterface
    {
        //$this->reset();
        $this->chikenSoup = "Pot with hot water, ";

        $this->chikenSoup .= " first we add " . implode(", ", $first);
        return $this;
    }

    public function secondIngridients(array $second): SoupBuilderInterface
    {
        $this->chikenSoup .= " secondn time we add " . implode(", ", $second);
        return $this;
    }

    public function lastIngridients(array $last): SoupBuilderInterface
    {
        $this->chikenSoup .= " and before finish we add " . implode(", ", $last);
        return $this;
    }

    public function getSoup(): string
    {
        $soup = $this->chikenSoup;
        $this->reset();
        return $soup;
    }


}