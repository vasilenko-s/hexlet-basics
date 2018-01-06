<?php
/*
Реализуйте функцию reverseInt, которая переворачивает цифры в переданном числе:

31 == reverseInt(13);
-321 == reverseInt(-123);


*/

namespace App\Solution;

// BEGIN (write your solution here)
function reverseInt($num)
{
    // //преобразовать строку в массив
    $num=(string)$num;
    $result="";
    if ($num[0]=="-") {
        $result.="-";
        //отрезаем знак минус
        $num=substr($num, 1);
    }
    for ($i=strlen($num)-1; $i>=0; $i--) {
        // формируем массив. Записываем под следующим индексом
        $result.=$num[$i];
    }
    return $result;
}
 var_dump(reverseInt(0));
// END
