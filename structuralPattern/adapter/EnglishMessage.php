<?php

namespace lrn\structuralPattern\adapter;

class EnglishMessage implements MessageAdapterInterface
{
    public function showMessage(string $msg)
    {
        echo $msg;
        echo "\n";

    }
}