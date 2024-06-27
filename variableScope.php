<?php

require 'variables.php';

// get variable $var from variables.php
echo $var;

function test() {
    // initialization $var to global variable
    global $var;
    echo " Print from test function " . $var;
}

test();