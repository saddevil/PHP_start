<?php

//Задание №1
echo '<p>Задание №1</p>';
$x = -4;
if ($x < 0) {
    echo '$y = '.$y = -1;
} elseif ($x > 0) {
    echo '$y = '.$y = 1;
}else {
    echo '$y = '.$y = 0;
}

//Задание №2
echo '<p>Задание №2</p>';
$a = 12;
$b = 11;
$c = 17;

if (($a < $b && $b < $c)||($c < $b && $b < $a)) {
    echo "Сумма максимального и минимального значений = ".($a + $c);
} elseif (($a < $c && $c < $b)||($b < $c && $c < $a)) {
    echo "Сумма максимального и минимального значений = ".($a + $b);
} else {
    echo "Сумма максимального и минимального значений = ".($b + $c);
}

//Задание №3
echo '<p>Задание №3</p>';
$a = 12;
$b = 10;
$c = 7;
$d = 9;

$a = 12;
$b = -20;
$c = 71;
$d = 14;

if (($a > $b)&&($a > $c)&&($a > $d)) {
    echo "Максимальное число = ".$a;
} elseif (($b > $a)&&($b > $c)&&($b > $d)) {
    echo "Максимальное число = ".$b;
} elseif (($c > $a)&&($c > $b)&&($c > $d)) {
    echo "Максимальное число = ".$c;
} else {
    echo "Максимальное число = ".$d;
}

//Задание №4_1
echo '<p>Задание №4_1</p>';
$a = 12;
$b = 11;
$c = 10;
$d = 10;

if (($c <= $a && $d <= $b)||($d <= $a && $c <= $b)) {
    echo 'Предмет поместится!';
} else {
    echo 'Предмет не поместится!';
}

//Задание №4_2
echo '<p>Задание №4_2</p>';
$a = 3;
$b = 4;
$c = 5;
$d = 5;
$e = 4;
$f = 4;

if (    (($d <= $a) && ($e <= $b) && ($f <= $c)) ||
    (($d <= $a) && ($e <= $c) && ($f <= $d)) ||
    (($d <= $b) && ($e <= $c) && ($f <= $a)) ||
    (($d <= $b) && ($e <= $a) && ($f <= $c)) ||
    (($d <= $c) && ($e <= $a) && ($f <= $b)) ||
    (($d <= $c) && ($e <= $b) && ($f <= $a))
) {
    echo 'Предмет поместится!';
} else {
    echo 'Предмет не поместится!';
}