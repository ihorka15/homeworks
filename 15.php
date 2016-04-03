<?php
/**
 * Created by PhpStorm.
 * User: Userok
 * Date: 30.03.2016
 * Time: 22:09
 */
$a = 20;
$b = 3;
$operator = '%';
    if ($operator == '+') {
       $result = $a + $b;
    }
    elseif ($operator == '-'){
       $result = $a - $b;
    }
    elseif ($operator == '*'){
       $result = $a * $b;
    }
    elseif ($operator == '/'){
        $result = $a / $b;
    }
    elseif ($operator == '%'){
        $result = $a % $b;
    }
    if ($b == 0){
        echo "На 0 делить нельзя";
    }
echo $result;

