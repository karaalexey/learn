<?php

interface SoupBuilderInterface
{
    public function reset(): SoupBuilderInterface;
    public function firstIngridients(array $first): SoupBuilderInterface;
    public function secondIngridients(array $second): SoupBuilderInterface;
    public function lastIngridients(array $last): SoupBuilderInterface;
    public function getSoup(): string; //пошаговый рецепт приготовления
}