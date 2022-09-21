<?php
class peopleLive{
protected $mood = "Good";

public function BadMood(){
    if($this->mood == "Good"){
        echo "U can Drink coffee!))<br>";
    }else {
        echo "U can drink some beer, but not more 2 bottles";
    }
}

}

class OneGuy extends peopleLive{
    public $beer = 2;//how many beers you needed for good mood?
    public function BadMood(){

        if($this->mood == "Good"){
            echo "U can Drink coffee!))";
        }else {
            $this->beer+=1;
        } echo $this->beer;
    }

}
$bro = new OneGuy();
$bro->BadMood();

?>