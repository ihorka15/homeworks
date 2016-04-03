<?php
$a = 100;
    echo "Число А  $a <br />" ;
$b = 20;
    echo "Число B  $b <br />" ;
    if ($a > $b) {
        echo'Максимальное число A ' , $a;
    }
    if ($a < $b) {
        echo 'Максимальное число B ' , $b;
    }
    if ($a == $b){
        echo "Числа равны";
    }
echo '<br />';
echo max($a,$b);