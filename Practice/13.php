<p>
    13) Используя три аргумента функции -  числа а, b, c – стороны предполагаемого треугольника, определить
    возможность существования треугольника по сторонам. Результат вывести на экран в следующем виде:
    "Треугольник существует." - если треугольник с такими сторонами существует.
    "Треугольник не существует." - если треугольник с такими сторонами не существует
</p>

<?php
function test($a,$b,$c){
    if(($a < $b + $c ) && ($b <$a + $c) && ($c < $a +$b)){
        return   "Треугольник существует!!!!";
    } else return "Треугольник не существует!!!!";
}
echo test(1,2,3);