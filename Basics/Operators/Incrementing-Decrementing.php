<?php
$x = 5;

echo $x++; // post inkrementacja najpierw zwraca 5 potem zwiększa na 6

echo ++$x; // pre inkrementacja najpierw zwiększa z 6 na 7 a potem zwraca

echo $x--; // post dekrementacja najpierw zwraca 7 potem zmniejsza na 6

echo --$x; // pre dekrementacja najpierw zmniejsza z 6 na 5 a potem zwraca 

echo '<br>';

$y = 'abc';

echo ++$y; // zwraca abd

echo '<br>';

$x2 = null;
echo ++$x2; // zwraca 1
?>