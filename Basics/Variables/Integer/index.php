<?php 

echo PHP_INT_MIN; // zwraca -9223372036854775808
echo '<br>';
echo PHP_INT_MAX; // zwraca 9223372036854775807
echo '<br>';
echo PHP_INT_SIZE; // zwraca 8
echo '<br>';

$x = 0x2A;
echo $x; // zwraca 42
echo '<br>';

$x2 = 055;
echo $x2; // zwraca 45
echo '<br>';

$x3 = 0b11;
echo $x3; // zwraca 3
echo '<br>';

var_dump((int)PHP_INT_MAX +1); // zwraca float(9.223372036854776E+18)
echo '<br>';

var_dump((int) true); // zwraca int(1)
echo '<br>';

var_dump((int) false); // zwraca int(0)
echo '<br>';

var_dump((int) 3.23); // zwraca int(3)
echo '<br>';

var_dump((int) '5'); // zwraca int(5)
echo '<br>';

var_dump((int) '5.34'); // zwraca int(5)
echo '<br>';

var_dump((int) '5dsbf'); // zwraca int(5)
echo '<br>';

var_dump((int) 'dsbf6'); // zwraca int(0)
echo '<br>';

var_dump((is_int(123))); // zwraca bool(true)
echo '<br>';

$y = 200_000_000;
?>