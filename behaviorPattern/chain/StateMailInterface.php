<?php

namespace lrn\behaviorPattern\chain;

interface StateMailInterface
{
    public function __construct(string $myMail);

    public function getStatus();
    public function toNextState(Mail $mail);
}
