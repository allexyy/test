<?php
//Класс описывающий общие парамтры животных
class Animal {
    public $count;
    public $prod;
    public $prodname;
}
class Cow extends Animal{
    //Задаем нужные параметры при вызове класса
    function __construct()
    {
        $this->count = 10;
        $this->prod = rand(8,12);
        $this->prodname = " литров молока";
    }
}
class Chicken extends Animal{
    function __construct()
    {
        $this->count = 20;
        $this->prod = rand(0,1);
        $this->prodname = " яиц";
    }
}
class Hlev{
    //Метод сбора продукции
    public function getEat($count, $prod){
        $fullprod = 0;
        for($i=0;$i<$count;$i++){
            $fullprod += $prod;
        }
        return $fullprod;
    }
}
$hlev = new Hlev;
$cow = new Cow;
$chicken = new Chicken;
echo $hlev->getEat($cow->count,$cow->prod).$cow->prodname;
echo ' и '.$hlev->getEat($chicken->count,$chicken->prod).$chicken->prodname;