<p>
    3) Реализовать шифрование текста путем замены букв друг другом (напр. A => B, B=>X, итд). Каждая буква может
    представлять только одну другую букву. Написать три функции - первая генерирует ключ в виде нового алфавита.
    Вторая шифрует заданный текст по заданному ключу. Третья расшифровывает заданный зашифрованный текст
    по заданному ключу.
</p>
<?php
function test($arr)
{
    $array = ['q' => 'm', 'w' => 'n', 'e' => 'b', 'r' => 'v', 't' => 'c', 'y' => 'x', 'u' => 'z',
        'i' => 'l', 'o' => 'k', 'p' => 'j', 'a' => 'h', 's' => 'g', 'd' => 'f', 'f' => 'd',
        'g' => 's', 'h' => 'a', 'j' => 'p', 'k' => 'o', 'l' => 'i', 'z' => 'u', 'x' => 'y',
        'c' => 't', 'v' => 'r', 'b' => 'e', 'n' => 'w', 'm' => 'q',];
    return str_replace($array,$arr);
};
$test = test();
$test = 'Hello world';
print_r($test);