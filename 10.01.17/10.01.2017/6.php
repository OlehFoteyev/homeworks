<?php
function test($a,$b,$c){
    $d = ($b ** 2) - 4 * ($a * $c);
    if($d > 0){
        $x_1 = (- $b + $d) / (2 *$a);
        $x_2 = (- $b - $d) / (2 *$a);
        return "Превый корень: {$x_1},<br>второй корень: {$x_2}. ";
    }
    if($d == 0){
        $x = (- $b + $d) / (2 *$a);
        return $x;
    }
    if($d < 0){
        return "Дискриминант отрицательный!Корней нет!!!";
    }
}

echo test(5,10,15);