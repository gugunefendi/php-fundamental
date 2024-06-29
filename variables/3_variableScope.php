<?php

// PHP has three different variable scope:
//     1. local
//     2. global
//     3. static
//     4. super global

$number = 10; // global variable
function getNumber() {
  echo $x; // $x is local variable | output error because $x is local variable and only can accessed within function
}
getNumber();

$fruit = 'Strawberry'; // global variable can only accessed outside a function
function getFruit() {
    echo $fruit; // error : not valid
}
getFruit();
echo $fruit; // valid

$user = 'Gunawan';
function getUser() {
    global $user; // assign $user with keyword 'global', so we can accessed global variable from within function
    echo $user; // valid and output: Gunawan
}
getUser();

$y = 10;
function myTest() {
  $GLOBALS['y'] = 1000; // second way accessed global variable within functon used super global keyword $GLOBALS['']
}
myTest();
echo $y; // outputs 1000

// super global keywords
// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV
function test_superglobal()
{
    $name = 'Gunawan';
    echo $_POST['name']; // array super global 
}

function testStatic() {
  static $count = 0;
  $count++;
  echo $count;
}
testStatic(); // output 0
testStatic(); // output 1
testStatic(); // output 2