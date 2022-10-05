<?php
//Инкапсуляция+наследование
class Washmashine{
    protected $engine;
    protected $frame;
    protected $tank;

    public function __construct($engine, $frame, $tank)
    {
        $this->engine = $engine;
        $this->frame = $frame;
        $this->tank = $tank;
    }
    public function showInfo()
    {
        echo "Двигатель мощностью " . $this->engine . ", размер корпуса " . $this->frame . ", максимальная загрузка белья " . $this->tank;
    }

    public function washClothes(){
        echo "Для начала стирки нажмите ПУСК!<br>";
    }
}
class HorizontWash extends Washmashine{
    private $inputClothes = "Horizontal put<br>";

    public function __construct($engine, $frame, $tank)
    {
        parent::__construct($engine, $frame, $tank);
    }

    public function start (){
        $this->error(1);
    }

    private function error ($err){
        echo $this->inputClothes;
        echo "ПУСК<br>";
        if ($err == 0){
            echo "До конца стирки осталось 29мин:59сек";
        }
        else if ($err == 1){
            echo "Плохо закрыта крышка";
        } else {
            echo "Читай инструкцию!";
        }
    }
}
$beko = new HorizontWash("300W", "Big", "6Kg" );
$beko->showInfo();
$beko->washClothes();
$beko->start();

?>