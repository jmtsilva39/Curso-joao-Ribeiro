<?php

    // STRINGS
    // ------------------------------------------------------------------

    // Uma string é um conjunto de caracteres.
    // Já vimos muitas strings ao longo do módulo.
    // Vamos relembrar alguns dos conceitos e acrescentar novas informações.

    $nome = "Joao";
    $apelido = 'Ribeiro';

    // As duas variáveis são do tipo string
    // Diferença: nas aspas duplas, podemos adicionar variáveis no interior

    $apresentacao = "O meu nome é $nome e o apelido é $apelido.";

    // Podemos melhorar a leitura com a seguinte equivalência
    $apresentacao = "O meu nome é ${nome} e o apelido é ${apelido}.";
    //ou
    $apresentacao = "O meu nome é {$nome} e o apelido é {$apelido}.";

    // ------------------------------------------------------------------
    // CONCATENAÇÃO DE STRINGS

    $nome_completo = $nome . ' ' . $apelido;

    // ------------------------------------------------------------------
    // COMO OBTER A PRIMEIRA LETRA DO NOME?

    echo $nome[0];  // vamos falar de arrays em breve

    // para obter a 3ª letra
    echo $nome[2];

    // J o ã o
    // 0 1 2 3

    // para acesso a letras da direita para a esquerda
    // podemos usar números negativos
    echo $nome[-1];

    // Podemos usar este método para modificar letras
    $apelido[2] = 'B';
    echo $apelido;