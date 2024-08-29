<?php

$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];

$z = $x + $y;

print_r($z); // zwraca Array ( [0] => a [1] => b [2] => c )

echo '<br>';

$x2 = ['a', 'b', 'c'];
$y2 = ['d', 'e', 'f', 'g', 'h'];

$z2 = $x2 + $y2;

print_r($z2); // zwraca Array ( [0] => a [1] => b [2] => c [3] => g [4] => h )

echo '<br>';

$x2 = ['a' => 1, 'b' => 2, 'c' => 3];
$y2 = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];

$z2 = $x2 + $y2;

print_r($z2); // zwraca Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 [e] => 5 [f] => 6 [g] => 7 [h] => 8 )

echo '<br>';

$x3 = [1, 2, 3];
$y3 = ['1', '2', '3'];

var_dump($x3 == $y3); // zwraca bool(true)
echo '<br>';
var_dump($x3 === $y3); // zwraca bool(false)

echo '<br>';
echo '<br>';

//kolejność w tablicy
$x2 = ['a' => 1, 'b' => 2, 'c' => 3];
$y2 = ['a' => 1, 'c' => 3, 'b' => 2];

var_dump($x3 == $y3); // zwraca bool(true)
echo '<br>';
var_dump($x3 === $y3); // zwraca bool(false)

?>