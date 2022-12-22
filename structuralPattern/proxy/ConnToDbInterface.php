<?php

namespace lrn\structuralPattern\proxy;

interface ConnToDbInterface
{
    public function connectDB();
    public function closeConn();
}