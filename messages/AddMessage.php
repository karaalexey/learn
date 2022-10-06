<?php
//Controller


class AddMessage
{

    public function addMessageToDB($message)
    {
        $sql = "INSERT INTO up_message(id, message) VALUES(NULL, '$message')";


        return $sql;
    }
}
