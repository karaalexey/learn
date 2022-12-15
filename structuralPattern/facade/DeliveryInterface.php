<?php

namespace lrn\structuralPattern\facade;

interface DeliveryInterface
{
    public function __construct($kg, $city);
    public function howFar();
    public function priceForDeli();
}