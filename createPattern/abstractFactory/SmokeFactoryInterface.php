<?php

interface SmokeFactoryInterface
{
    public function createGloStick(): GloStickInterface;

    public function createIqsHeets(): IqsHeetsInterface;

    public function createSigarets(): SigaretsInterface;
}