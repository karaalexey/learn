<?php
class Animals {
public $age;
public $eat;
private $name;
function Eating(){
       if ($this->eat == "milk") {
           return $this->age++;
       }
       echo "Ваше животное чувствует себя очень хорошо, но его(ее) возраст остался прежним";
   }

   function ShowName($name){
    $this->name = $name;
    echo $this->name . '<br>';
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
$Gosha->ShowName("Gosha");
echo "Gosha have age 0.5 year. Now Gosha eating " . $Gosha->eat . " then have age = " . $res . '<br>';

$Vasik = new Cat();
$Vasik->age = 2;
$Vasik->eat = "meet";
$res = $Vasik->Eating();
$Vasik->ShowName("Vasik");
echo "Vasik have age 2 year. Now Vasik eating " . $Vasik->eat . " then have age = " . $res;

?>