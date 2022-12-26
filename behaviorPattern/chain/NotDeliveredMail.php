<?php

namespace lrn\behaviorPattern\chain;

class NotDeliveredMail implements StateMailInterface
{
    private string $myMail;
    public function __construct($myMail)
    {
        $this->myMail = $myMail;
    }
    public function getStatus()
    {
        echo "Message not Delivered!".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        echo "Your message on way to admin.".PHP_EOL;
        $mail->setState(new DeliveredMail($this->myMail));
    }
}
