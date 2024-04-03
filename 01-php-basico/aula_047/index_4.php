<?php

// INCLUDE e REQUIRE

/* 
Exemplo: Podemos criar um script que contém funções,
importar para este script e chamar essas funções.
*/

require_once('functions.php');

echo adicionar(20, 5) . '<br>';
echo subtrair(20, 5) . '<br>';
echo multiplicar(20, 5) . '<br>';
echo dividir(20, 5) . '<br>';
