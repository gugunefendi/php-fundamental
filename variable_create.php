<?php

// Rules create valiable in PHP
// 1. Assign variable with $ followed variable name
// 2. Variable name start with a letter or underscore
// 3. Variable name can't start with number
// 4. Variable name case-sensitive $nam and $Name is two different variable

$name = "Gunawan"; // valid
$Name = 'Budi'; // valid
$_name = 'Cici'; // valid

// invalid: start with number
// $3numbers = [5, 8, 4];

//invalid: keyword $this is special syntax can't use for variable
// $this = 'Value';

// Assign multiple value
$x = $y = $z = 'Value';