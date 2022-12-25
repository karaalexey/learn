<?php

namespace lrn\behaviorPattern\command;

class WorkedBot implements UndoRedoInterface
{
    private OnlineBot $onlineBot;
    private $callMessage = "Hi, How i can help you? Write your message bottom!".PHP_EOL;
    private $undoMessage = "I hope i can helped you!".PHP_EOL;

    public function __construct(OnlineBot $onlineBot)
    {
        $this->onlineBot = $onlineBot;
    }

    public function execute()
    {
        $this->onlineBot->callBot($this->callMessage);
    }
    public function undo()
    {
        $this->onlineBot->cancelCallBot($this->undoMessage);
    }

    public function redo()
    {
        $this->onlineBot->redoBot();
    }


}