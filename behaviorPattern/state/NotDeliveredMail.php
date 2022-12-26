<?php

namespace lrn\behaviorPattern\state;

use lrn\structuralPattern\facade\Delivery;

class NotDeliveredMail implements StateMailInterface
{
    public function getStatus()
    {
        echo "Message not Delivered!".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        echo "Your message on way to admin.".PHP_EOL;
        $mail->setState(new DeliveredMail());
    }
}
