<?php 
class Hlev{
    public function getEat($animal, $min, $max)//Сбор продукта у животных (Т.к все они имеют уникальный номер пробегаемся по их общему кол-ву без страха перепутать)
    {
        $prod=0;
        for($i=0;$i<=$animal;$i++){
            $prod += rand($min, $max);
        }
        return $prod;
    }
}
$hlev = new Hlev();
//Заводим животных в хлев
$hlev->cow = 10;
$hlev->chicken = 20;
//Доим коров, собираем яйца
$milk = $hlev->getEat($hlev->cow,8,12);
$egg= $hlev->getEat($hlev->chicken,0,1);
//Выводим на экран общее кол-во собранной продукции
echo "Удалось собрать: $milk литров молока и $egg яиц";