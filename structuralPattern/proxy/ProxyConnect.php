<?php

namespace lrn\structuralPattern\proxy;

class ProxyConnect
{
    protected $conn;

    public function __construct(ConnToDbInterface $conn)
    {
        $this->conn = $conn;
    }


    public function connectDB($pass)
    {
        if($pass == 1){
           echo $this->conn->connectDB().PHP_EOL;
        }
        else{
            echo $this->conn->closeConn().PHP_EOL;
        }
    }

}