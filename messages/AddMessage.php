<?php



class AddMessage
{

    public function addMessageToDB($message)
    {
       // $this->pdo = $pdo;
        $sql = "INSERT INTO up_message(id, message) VALUES(NULL, '$message')";


        //$this->connect($sql);

        return $sql;
    }
}
