<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>Hi PHP</h1>-->
<!---->
<!--</body>-->
<!--</html>-->

<?php
class Animals {
   public $age;
   public $eat;

   public function Eating()
   {
       if ($this->eat == "milk") {
           return $this->age++;
       }
       echo "Ваше животное чувствует себя очень хорошо, но его(ее) возраст остался прежним";
   }
}

class Cat extends Animals{
     function Eating(){
        if ($this->eat == "milk"){
            return $this->age+1;
        } elseif ($this->eat == "meet"){
            return $this->age+2;
        }
    }
}
$Gosha = new Cat();
$Gosha->age = 0.5;
$Gosha->eat = "milk";
$res = $Gosha->Eating();
echo "Gosha have age 0.5 year. Now Gosha eating " . $Gosha->eat . " then have age = " . $res . '<br>';

$Vasik = new Cat();
$Vasik->age = 2;
$Vasik->eat = "meet";
$res = $Vasik->Eating();
echo "Vasik have age 2 year. Now Vasik eating " . $Vasik->eat . " then have age = " . $res;

?>