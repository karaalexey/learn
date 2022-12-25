<?php

namespace lrn\behaviorPattern\command;

class OnlineBot
{
    private bool $status = false;
    private string $userName;
    private string $callMessage = "Try again".PHP_EOL;
    private string $cancelMessage = "O'key Bye".PHP_EOL;

    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }


    public function callBot(string $message)
    {
        if(!$this->status){
            echo $this->userName . " " . $message;
            $this->status = true;
        } else echo $this->userName . " " . "you already".PHP_EOL;
    }
    public function cancelCallBot(string $message)
    {
        if($this->status){
            echo $this->userName . " " . $message;
            $this->status = false;
        }else echo $this->userName . " " . "bad joke!".PHP_EOL;
    }
    public function redoBot()
    {
        if(!$this->status){
            $this->callBot($this->callMessage);
        }else $this->cancelCallBot($this->cancelMessage);
    }
}