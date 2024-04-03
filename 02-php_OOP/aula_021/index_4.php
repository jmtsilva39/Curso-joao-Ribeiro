<?php

// DECLARAÇÃO STRICT TYPES

declare(strict_types=1);

// a função tabuada recebe um inteiro e devolve um array
function tabuada(int $a): array
{
    $resultados = [];
    for ($i = 1; $i <= 10; $i++) {
        $resultados[] = $i * $a;
    }
    return $resultados;
}

$resultados = tabuada(10);
foreach ($resultados as $resultado) {
    echo $resultado . '<br>';
}
