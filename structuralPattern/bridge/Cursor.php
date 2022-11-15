<?php

namespace lrn\structuralPattern\bridge;

//use lrn\structuralPattern\bridge;

interface Cursor
{
    public function __construct(Comp $comp);
    public function select();
    public function properties();
    public function scrollUp();
    public function scrollDown();

}