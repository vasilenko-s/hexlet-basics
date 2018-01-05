<?php
/* Треугольник Паскаля — бесконечная таблица биномиальных коэффициентов,
 имеющая треугольную форму. В этом треугольнике на вершине и по бокам стоят
 единицы. Каждое число равно сумме двух расположенных над ним чисел.
 Строки треугольника симметричны относительно вертикальной оси.

0:      1
1:     1 1
2:    1 2 1
3:   1 3 3 1
4:  1 4 6 4 1

src/App/Solution/Solution.php

Напишите функцию generate, которая возвращает указанную строку
треугольника паскаля

Пример:

generate(4); // [1, 4, 6, 4, 1]

*/

namespace App\Solution;

// BEGIN (write your solution here)
function generate($rowNumber)
{
    $res=[];
    for ($i=0; $i <=$rowNumber; $i++) {
     # code...
        for ($j=0; $j <=$i; $j++) {
       # code...
            if (!isset($res[$i-1][$j-1])||(!isset($res[$i-1][$j]))) {
         # code...
                $res[$i][$j]=1;
            } else {
                  $res[$i][$j]=$res[$i-1][$j-1]+$res[$i-1][$j];
            }
        }
    }
    return $res[$i-1];
}
 var_dump(generate(4));
// END
