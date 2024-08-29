<?php

$x = true;
$y = false;


// &&
var_dump($x && $y); // zwraca false
echo '<br>';

// ||
var_dump($x || $y); // zwraca true
echo '<br>';

// !
var_dump(!$y); // zwraca true
echo '<br>';

//and 
$x2 = $x and $y;
var_dump($x2); // zwraca true a powinien false gdyż najpierw jest wykonywane działanie przypisania zmiennej do $x a potem dopiero porównanie operator and

echo '<br>';

function fun1() {
    echo 'call fun1';
    return true;
}
function fun2() {
    echo 'call fun2';
    return false;
}
var_dump(fun1() || fun2())
?>