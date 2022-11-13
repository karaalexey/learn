<?php

namespace lrn\structuralPattern\adapter;

class AdapterHebrewMessage implements MessageAdapterInterface
{
    private $hebrewMessage;
    private $rev;
    private $msg;

    public function __construct(HebrewMessage $hebrewMessage)
    {
        $this->hebrewMessage = $hebrewMessage;
        $this->translate();
    }

    public function translate()
    {
        $this->rev = strrev($this->msg);

    }

    public function showMessage(string $msg)
    {
        $this->msg = $msg;
        $this->translate();
        $this->hebrewMessage->showMessage($this->rev);
    }

}