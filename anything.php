<?php

// fibonaci

function fibonaci($n) {
    $fibonaciNumbers = [0, 1];
    for($i = 2; $i < $n; $i++) {
        $fibonaciNumbers[] = $fibonaciNumbers[$i - 1] + $fibonaciNumbers[$i - 2];
    }
    return $fibonaciNumbers;
}
$n = 5;
$deretFibonaci = fibonaci($n);
print_r($deretFibonaci);