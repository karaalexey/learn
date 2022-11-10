<?php

class Cook
{
    public function cookingChickenSoup(SoupBuilderInterface $chikenSoup)
    {
        $chickenSoup = $chikenSoup
            ->firstIngridients(["chiken meet", "onion", "carrot"])
            ->secondIngridients(["potato"])
            ->lastIngridients(["salt", "spices"])
            ->getSoup();
        return $chickenSoup;
    }
    public function cookingFriedPotato(SoupBuilderInterface $chikenSoup)
    {
        $friedPotato = $chikenSoup
            ->secondIngridients(["potato"])
            ->lastIngridients(["salt", "spices"])
            ->getSoup();
        return $friedPotato;
    }

    public function cookingRedSoup(SoupBuilderInterface $redSoup)
    {
        $redSoup = $redSoup
            ->firstIngridients(["Some meet"])
            ->secondIngridients(["potato", "fried onion", "fried carrot", "fried beetroot"])
            ->lastIngridients(["salt", "spices"])
            ->getSoup();
        return $redSoup;
    }
}