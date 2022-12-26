<?php

namespace lrn\behaviorPattern\state;

interface StateMailInterface
{
    public function getStatus();
    public function toNextState(Mail $mail);
}
