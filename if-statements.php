<?php

/* if statements with == and === operators */
$a = 10;
$b = 10.00;
$c = '10';

if($a == $b && $b == $c && $c == $a) {
    echo 'True: $a == $b && $b == $c && $c == $a';
} else {
    echo 'False: ' . '$a == $b && $b == $c && $c == $a';
}
echo '<br/>';
if($a === $b) {
    echo 'True: $a === $b';
} else {
    echo 'False: $a === $b';
}

/* The following example would display a is bigger than b if $a is bigger than $b: */
$a = 10;
$b = 5;
if ($a > $b)
  echo "a is bigger than b";

?>