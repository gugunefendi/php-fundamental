<?php

// two ways to defined CONSTANTA 
// 1. use define() function
// 2. use keyword const

// define() can be defined to an arbitrary expression
define("PI", 3.14);
echo PI;
define("RADIUS", 10);
echo RADIUS;
define("AREA", PI * RADIUS * RADIUS);
echo AREA;


// const keyword only scalar type (bool, int, float and string) and arrays
const PI = 3.14;
const GREETING = "Hello World";
const NUMBERS = [1, 2, 3, 4];
echo PI;
echo GREETING;
echo NUMBERS[1];
