<?php

namespace lrn\behaviorPattern\state;

class DeliveredMail implements StateMailInterface
{
    public function getStatus()
    {
        echo "Message delivered, but not read yet!".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        //echo "Your message delivered, but not read yet!".PHP_EOL;
        $mail->setState(new ReadedMail());

    }
}
