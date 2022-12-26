<?php

namespace lrn\behaviorPattern\chain;

class Mail
{
    private StateMailInterface $stateMail;
    private string $myMail;

    public function __construct($myMail)
    {
        $this->myMail = $myMail;
        $this->setState(new SentMail($myMail));
    }

    public function setState(StateMailInterface $stateMail): void
    {
        $this->stateMail = $stateMail;
        $this->toNextState();
    }
    public function toNextState()
    {
        $this->stateMail->toNextState($this);
    }
    public function getState()
    {
        return $this->stateMail;

    }

}
