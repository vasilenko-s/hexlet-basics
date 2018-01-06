<?php
/*
Реализуйте функцию isPrime определяющую, является ли число простым.

Пример:

isPrime(1); // false
isPrime(7); // true
isPrime(10); // false

*/

namespace App\Solution;

// BEGIN (write your solution here)
function isPrime($num)
{
    $result=false;
    if ($num>1) {
        $result=true;
        for ($i=2; $i<sqrt($num); $i++) {
        # code...
            if ($num%$i==0) {
                $result=false;
                break;
            }
        }
        return $result;
    }
}
 var_dump(isPrime(2));
// END
