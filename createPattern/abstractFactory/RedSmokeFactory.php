<?php

class RedSmokeFactory implements SmokeFactoryInterface
{
    public function createGloStick(): GloStickInterface
    {
        return new GloStickRed();
    }

    public function createIqsHeets(): IqsHeetsInterface
    {
        return new IqsHeetsRed();
    }

    public function createSigarets(): SigaretsInterface
    {
        return new SigaretsRed();
    }

}