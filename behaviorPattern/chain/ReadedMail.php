<?php

namespace lrn\behaviorPattern\chain;

class ReadedMail implements StateMailInterface
{
    private string $myMail;
    public function __construct($myMail)
    {
        $this->myMail = $myMail;
    }
    public function getStatus()
    {
        echo "Your message was readed admin's!".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        echo "Your message was readed admin's!".PHP_EOL;
        echo "Don't worry Be Happy!".PHP_EOL;
        echo "Your Message:".PHP_EOL.$this->myMail;
    }
}
