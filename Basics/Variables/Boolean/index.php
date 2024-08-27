<?php

$isComplete1 = true;
$isComplete2 = TRUE;

// integers 0, -0 = false
// floats 0.0, -0.0 = false
// string '' = false
// string '0' = false
// empty array [] = false
// null = false
// Wszystko inne jest konwertowane na prawdę nawet ujemne liczby lub string 'false'

$isComplete3 = false;

var_dump($isComplete3); // zwraca bool(false)

echo '<br>';

$isComplete4 = (string) false;

var_dump($isComplete4); // zwraca string(0) ""

echo '<br>';

$isComplete4 = (string) true;

var_dump($isComplete4); // zwraca string(1) "1"

echo '<br>';

$isComplete5 = false;

var_dump(is_bool($isComplete5)); // zwraca bool(true)

echo '<br>';

$isComplete6 = 123;

var_dump(is_bool($isComplete6)); // zwraca bool(false)

?>