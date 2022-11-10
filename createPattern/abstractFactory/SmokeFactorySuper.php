<?php


class SmokeFactorySuper
{
    public static function red(): SmokeFactoryInterface
    {
        return new RedSmokeFactory();
    }
    public static function blue(): SmokeFactoryInterface
    {
        return new BlueSmokeFactory();
    }
}