<?php

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

?>