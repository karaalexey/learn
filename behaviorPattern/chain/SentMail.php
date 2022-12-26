<?php

namespace lrn\behaviorPattern\chain;

class SentMail implements StateMailInterface
{

    private string $myMail;
    public function __construct($myMail)
    {
        $this->myMail = $myMail;
    }

    public function getStatus()
    {
        echo "You writing message".PHP_EOL;
    }
    public function toNextState(Mail $mail)
    {
        $er = new Errors();
        echo "Do you want sent your message?".PHP_EOL;
        echo "Please write 'y' or 'n'".PHP_EOL;
        $message = readline("message");
//        $message = "y"; // for debug
        if(strtolower($message) == "y") {
            echo "Your message was sent!".PHP_EOL;
            $mail->setState(new NotDeliveredMail($this->myMail));
        } elseif(strtolower($message) == "n"){
//            echo "You write message, but not sent him!".PHP_EOL;
            $er->noSent();
        }else $er->exitErrors();

    }
}
