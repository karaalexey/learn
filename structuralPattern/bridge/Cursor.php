<?php

namespace lrn\structuralPattern\bridge;

interface Cursor
{
    public function select();
    public function properties();
    public function scrollUp();
    public function scrollDown();

}