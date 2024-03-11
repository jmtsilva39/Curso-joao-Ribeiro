<?php

//INTEIROS

//são números sem casas decimais, positivos, negativos ou o zero;

$valor1 = 100;
$valor2 = 2345677;
$valor3 = 0;
$valor4 = 1265;


//em sistemas de 32 bits e 64 bits, temos
//limites máximos e mínimos diferentes.


echo PHP_INT_MIN . '<br>';
echo PHP_INT_MAX . '<BR>';

//podemos transformar variáveis fazendo 'cast' para inteiros

$valor_str = "145";
$valor_int = (int)$valor_str;
//ou
$valor_int_1 = (integer)$valor_str;

//