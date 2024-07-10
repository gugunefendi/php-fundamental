<?php

// +$a      Identity	Conversion of $a to int or float as appropriate.
// -$a	    Negation	Opposite of $a.
// $a + $b	Addition	Sum of $a and $b.
// $a - $b	Subtraction	Difference of $a and $b.
// $a * $b	Multiplication	Product of $a and $b.
// $a / $b	Division	Quotient of $a and $b.
// $a % $b	Modulo	Remainder of $a divided by $b.
// $a ** $b	Exponentiation	Result of raising $a to the $b'th power.

$x = "10";

// identity : Conversion of $x to int or float
$identity = + $x;
echo "Identity: $identity \n";

// negation : Opposite of $x
$negation = - $x;
echo "Negation: $negation \n";

//addtion
$addition = 10 + $x;
echo "Addition: $addition \n";

//subtraction
$subtraction = 20 - $x;
echo "Subtraction: $subtraction \n";

// multiplication
$multiplication = 5 * $x;
echo "Multiplication: $multiplication \n";

// division
$division = 50 / $x;
echo "Division: $division \n";

// modulus
$modulus = 23 % $x;
echo "Modulus: $modulus \n";

// exponent
$number = 3;
$exponent = 5 ** $number;
echo "Exponent: $exponent \n";
