<?php

//View

class View
{

    protected $message;

    public function setMessage()
    {
        echo 'Введите сообщение: ';

        //$this->message = readline("message");
        $this->message = 'qwer';  //это для дебагера
        if ($this->message != ''){
            return $this->message;
        }else{
            echo "Вы не ввели сообщение!";
            die;
        }
    }
}
