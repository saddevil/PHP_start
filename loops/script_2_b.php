<?php

$n=1; //Задаем начальное значение выводимых чисел
$k=17; //Задаем максимальное значение выводимых чисел

echo '<table class="table2">';
for($a=1; $a<=ceil($k/5); $a++) //Задаем параметры цикла: количество строк соответствует количеству столбцов и выводимых чисел
{
    echo '<tr>'; //Открываем строку
    echo '<td>'.$n.'</td>'; //Выводим первый столбец с текущим значением $n
    $x=$n+ceil($k/5); //Вычисляем значение для следующей ячейки
    for($b=1;$b<=4;$b++) //Выполняем цикл 4 раза
    {
        if ($x <= $k) //Задаем условие для вывода числел, заданных переменной $k
        {
            echo '<td>'.$x.'</td>'; //Выводим в ячейках числа
            $x += ceil($k/5);
        }
        else
        {
            echo '<td></td>'; //Данная строка необходима для отображения пустых ячеек
        }
    }
    $n++; //Задаем счетчик цикла
    echo '</tr>'; //Закрываем строку
}

echo '</table><br>'; //Закрываем нашу таблицу
