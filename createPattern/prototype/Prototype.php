<?php
include 'PrototypeInterface.php';

class Balloon implements PrototypeInterface
{
    public $diametr;
    public $color;
    public $date;

    public function __clone()
    {
        $this->diametr = " Copy of " .  $this->diametr;
        $this->color = " Copy of " .  $this->color;
        $this->date = clone $this->date;

    }


//    public function changeData(Int $diametr, String $color)
//    {
//        $this->diametr = $diametr;
//        $this->color = $color;
//    }


}
$redBalloon = new Balloon();
var_dump($redBalloon->date = new \DateTime());
echo $redBalloon->diametr = 20;
echo $redBalloon->color = " red ";
$blueBalloon = clone $redBalloon;
echo $blueBalloon->diametr;
echo $blueBalloon->color;
var_dump($blueBalloon->date = new \DateTime());



//$redBalloon->changeData(20, "red");
//echo $redBalloon->diametr;
//echo $redBalloon->color;
//$blueBalloon = clone $redBalloon;
//echo $blueBalloon->diametr;
//echo $blueBalloon->color;
//$blueBalloon->changeData(15, "blue");
//echo $blueBalloon->diametr;
//echo $blueBalloon->color;