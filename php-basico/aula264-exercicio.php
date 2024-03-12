<?php

echo '<pre>';

//EXERCÍCIO 1

/* 1. Cria a variável x igual a 100 
    2. Cria a variável y igual a 150
    3. Apresenta o resultado da adição das duas variáveis.

*/

$um = 100;
$dois =150;

$resultado = $um +$dois;

var_dump($resultado);

//EXERCÍCIO 2

/* 1. Defina a variável "numero" com valor igual a 50
    2. Apresenta a multiplicação desse valor por 4 unidades.
*/


$numero = 50;
$resultado = $numero * 4;

var_dump($resultado);

//EXERCÍCIO 3

/* 1. Define 3 variáveis todas com 15 unidades como valor
    2. Multiplica a primeira por 5, a segunda por 10 e a terceira por 15.
    3. Finalmente, adiciona as três variáveis.
    
    Resultado: 450.


    */

    $a = $b = $c = 15;

    $a *= 5;
    $b *= 10;
    $c *= 15;
    $resultado = $a + $b + $c;

    var_dump($resultado);


    /*  EXERCÍCIO 4
        1. Define $a e $b com valor igual a 20,
        2. Define $c e $d com valor igual a 5,
        3. Apresenta o resultado da divisão de $a adicionado a $b
        e depois dividido esse resultado pela adição de $c e $d.
    */


    $a = $b = 20;
    $c = $d = 5;

    var_dump(($a + $b)/($c + $d));



/* EXERCÍCIO 5 
1   . Apresentar o cálculo do perímetro de um quadrado com 3.2 metros de lado.
*/


echo (3.2*4) . 'm ';

