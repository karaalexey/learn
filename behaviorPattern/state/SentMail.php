<?php

namespace lrn\behaviorPattern\state;

class SentMail implements StateMailInterface
{
    public function getStatus()
    {
        echo "You writing message".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        $mail->setState(new NotDeliveredMail());









//        echo "Do you want sent your message?".PHP_EOL;
//        echo "Please write 'y' or 'n'".PHP_EOL;
//        $message = readline("message");
//        //$message = "y";
//        if(strtolower($message) == "y") {
//            echo "Your message was sent!".PHP_EOL;
//            $mail->toNextState(new NotDeliveredMail());
//        } elseif(strtolower($message) == "n"){
//            echo "You write message, but not sent him!".PHP_EOL;
//        //echo "Sorry try again later!..".PHP_EOL;
//        }else exit("Sorry! You wrong! Try again or try later!..");

    }
}
