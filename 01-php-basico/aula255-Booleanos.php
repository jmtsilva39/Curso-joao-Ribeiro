<?php
$apresentar_dados = false;
$valor = 0;
$float1 = 1.5;
$nome = 'nome';

//apresentar os tipos de cada variável

echo gettype($apresentar_dados) . '<br>';
echo gettype($valor) . '<br>';
echo gettype($float1) . '<br>';
echo gettype($nome) . '<br>';

//apresentar informações da variável

$mostrar = TRUE;
$mostrar = 10;
echo '<hr>';

var_dump($apresentar_dados);


echo '<hr>';
var_dump(is_bool($mostrar));