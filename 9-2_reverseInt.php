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

    $reverse = (int) strrev((string) abs($num));
    return $num > 0 ? $reverse : -$reverse;
}


// END
