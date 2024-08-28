<?php
$x = NULL;
$y = null;

var_dump($x); // zwraca NULL

echo '<br>';

var_dump(is_null($x)); // zwraca bool(true)

echo '<br>';

var_dump($x === null); // zwraca bool(true)

echo '<br>';

var_dump($z); 

echo '<br>';

unset($x);

var_dump(is_null($x));

echo '<br>';

var_dump((string) $y); // zwraca string(0) ""

?>