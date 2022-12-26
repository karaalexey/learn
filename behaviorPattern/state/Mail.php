<?php

namespace lrn\behaviorPattern\state;

class Mail
{
    private StateMailInterface $stateMail;

    public function __construct()
    {
        $this->setState(new SentMail());
        //$this->makeNextState();
    }

    public function setState(StateMailInterface $stateMail): void
    {
        $this->stateMail = $stateMail;

    }
    public function makeNextState()
    {
        $this->stateMail->toNextState($this);
    }
    public function getState()
    {
        return $this->stateMail;

    }

}
