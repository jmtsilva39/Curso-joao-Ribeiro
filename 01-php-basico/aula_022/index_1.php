<?php

    // ARRAYS
    // É uma variável que funciona como uma coleção de dados.

    $nome1 = "joao";
    $nome2 = "ana";
    $nome3 = "carlos";

    $nomes = array("joao", "ana", "carlos");
    // ou
    $nomes = ["joao", "ana", "carlos"];

    // como aceder a cada elemento
    echo $nomes[0]; // primeiro nome da coleção
    echo $nomes[2]; // terceiro nome da coleção

    // No caso anterior, as chaves são atribuídas automaticamente.
    // Podemos definir as nossas próprias chaves

    $nomes = [
        10 => "joao",
        20 => "ana",
        30 => "carlos"
    ];

    echo $nomes[20];

    // se tentarmos aceder a uma chave que não existe, surge um aviso

    echo $nomes[100];

    // para evitar o aviso, podemos verificar se o item existe
    var_dump(isset($nomes[200]));