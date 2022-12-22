<?php

namespace lrn\structuralPattern\proxy;

class ConnToDB implements ConnToDbInterface
{

    public function connectDB()
    {
        return "You connected to DB";
    }
    public function closeConn()
    {
        return "Connection is closed";
    }
}