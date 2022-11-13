<?php

namespace lrn\structuralPattern\adapter;

class EnglishMessage
{
    private $msg;

    public function __construct(string $msg)
    {
        $this->msg = $msg;
        $this->showMessage();
    }

    public function showMessage()
    {
        echo $this->msg;
    }
}