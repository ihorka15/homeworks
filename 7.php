<?php
/**
 * Created by PhpStorm.
 * User: Userok
 * Date: 30.03.2016
 * Time: 19:26
 */
$name = 'Ihor';
$age = 28;
echo "Меня зовут $name, ";
echo "мне $age лет. ";
if (($age > 18) && ($age <= 59)) {
    echo "Вам еще работать и работать";
}
if ($age > 59){
    echo "Вам пора на пенсию";
}
if (($age <= 17) && ($age > 0)) {
    echo "Вам еще рано работать";
}
?>