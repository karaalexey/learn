<?php

namespace lrn\behaviorPattern\state;

class ReadedMail implements StateMailInterface
{
    public function getStatus()
    {
        echo "Your message was readed admin's!".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        echo "Don't worry Be Happy!".PHP_EOL;
    }
}
