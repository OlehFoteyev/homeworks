<p>

    15) Используя аргумент функции - целое число(год), определить количество дней в году. Результат вывести на
    экран в следующем виде:
    "количество дней в году: x", где х - 366 для високосными года, х - 365 для обычного года.
    Подсказка: В високосном году - 366 дней, тогда как в обычном  - 365.
</p>
<?php
function test($a){
    if( $a %4 == 0 && $a %400 == 0 && $a %100 == 0){
        $x = 366;
        return "количество дней в году: {$x}";
    }else
    {
        $x =365;
        return "количество дней в году: {$x}";
    }
}
echo test(2000);