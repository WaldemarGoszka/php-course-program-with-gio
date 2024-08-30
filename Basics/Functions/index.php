<?php
declare(strict_types=1);
echo foo(); // zwraca Hello World

function foo() {
    return 'Hello World';
}
//---------------------------------
function foo2() {

}
var_dump(foo2()); // zwraca NULL
//---------------------------------
//foo3(); // wywołanie przed deklaracją nie zadziała w tym przypadku

if(true) {
    function foo3() {

    }
}
// foo3();
//------------------------------

function foo4() {
    echo 'Foo';
    function bar(){
        echo 'Bar';
    }
}
foo4();
bar();
//------------------------------
function calculate($num1, $num2): int {
    return $num1 + $num2;
}

$result = calculate(6,3);
echo $result;

//-----------------------------

function foo5(): int {
    return 1;
}
var_dump(foo5()); // zwróci int(1)

//-----------------------------

function foo6(): ?int { 
    return null;
}
//-------------------------------
function foo7(): int | float { 
    return 1.1;
}
//-----------------------------
function foo8(): mixed { 
    return [1.1];
}
?>