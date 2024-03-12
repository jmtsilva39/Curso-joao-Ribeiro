<?php

    // OPERADORES DE STRINGS
    // .    .=

    // São operadores específicos para efetuar operações com strings
    // Estamos a falar especificamente de operadores de concatenação.

    $nome = "joao";
    $nome = $nome . " ribeiro";     // joao ribeiro
    $apresentacao = "Bom dia, " . $nome . '.';  // Bom dia, joao ribeiro.

    // Podemos simplificar uma parte do código acima da seguinte forma
    $nome = "joao";
    $nome .= " ribeiro"; // joao ribeiro

    // portanto...
    $cliente = "joao ribeiro";
    $telefone = "123456789";
    $email = "joao.ribeiro@gmail.com";

    $completo = $cliente . ' - ' . $telefone . ' - ' . $email; 
    // joao ribeiro - 123456789 - joao.ribeiro@gmail.com