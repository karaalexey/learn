<?php

namespace lrn\behaviorPattern\chain;

class DeliveredMail implements StateMailInterface
{
    private string $myMail;
    public function __construct($myMail)
    {
        $this->myMail = $myMail;
    }

    public function getStatus()
    {
        echo "Message delivered, but not read yet!".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        echo "Your message delivered, but not read yet!".PHP_EOL;
        $mail->setState(new ReadedMail($this->myMail));

    }
}
