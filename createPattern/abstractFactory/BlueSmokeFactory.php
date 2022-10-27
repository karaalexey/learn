<?php

class BlueSmokeFactory implements SmokeFactoryInterface
{
    public function createGloStick(): GloStickInterface
    {
        return new GloStickBlue();
    }

    public function createIqsHeets(): IqsHeetsInterface
    {
        return new IqsHeetsBlue();
    }

    public function createSigarets(): SigaretsInterface
    {
        return new SigaretsBlue();
    }

}