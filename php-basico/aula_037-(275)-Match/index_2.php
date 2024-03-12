<?php

// EXPRESSÃO MATCH

// Podemos também analisar múltiplas condições de comparação.

$valor = 100;

$resultado = match(true) {
    $valor > 100 => 'Valor maior que 100.',
    $valor == 100 => 'Valor igual a 100.',
    $valor < 100 => 'Valor menor que 100.',
};

echo $resultado;