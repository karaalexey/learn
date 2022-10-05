<?php

interface YourInfoInterface
{
    public function getInfo($name, $surename, $age);
}

class Information implements YourInfoInterface
{
    public function getInfo($name = null, $surename = null, $age = null)
    {
        $result = '<br>No Info ';
        if ($name != ''){
            $result = "<br> Имя - " . $name;
        }
        if ($surename != ''){
            $result .= "<br> Фамилия - " . $surename;
        }
        if ($age != ''){
            $result .= ' <br> Возраст - ' . $age;
        }
        echo $result;
    }
}

$user1 = new Information();
$user1->getInfo();
$user2 = new Information();
$user2->getInfo('Alex', 'Kurt', 30);
$user1->getInfo('John', 'Washington', 56);