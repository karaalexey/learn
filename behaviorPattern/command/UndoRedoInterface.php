<?php

namespace lrn\behaviorPattern\command;

interface UndoRedoInterface extends CommandInterface
{
    public function undo();
    public function redo();
}