<?php

namespace lrn\behaviorPattern\command;

class Invoker
{
    private UndoRedoInterface $myBot;

    public function setJobForBot($myBot)
    {
        $this->myBot = $myBot;
    }
    public function call()
    {
        $this->myBot->execute();
    }
    public function cancel()
    {
        $this->myBot->undo();
    }
    public function redo()
    {
        $this->myBot->redo();
    }
}