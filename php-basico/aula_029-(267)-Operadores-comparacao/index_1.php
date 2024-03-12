<?php

    // OPERADORES DE COMPARAÇÃO
    // ==    ===    !=    <>    !==    <    >    <=    >=    <=>    ??    ?:

    // São operadores que permitem comparar valores de expressões ou variáveis.
    // O resultado dessas comparações são, tipicamente, valores boleanos.
    // Uma comparação pode ser verdadeira (true) ou falsa (false)

    // -------------------------------------------
    // verificar se valores são iguais
    var_dump(10 == 20);         // bool(false)
    var_dump(5 == 5);           // bool(true)
    var_dump('Joao' == 'joao'); // bool(false)
    var_dump("joao ribeiro" == "joao" . " " . "ribeiro");   //bool(true)

    var_dump(10 == "10");   // bool(true)
    // acontece uma conversão implícita da string para número.
    // como resolver?

    // Vamos comparar o valor e o tipo de dados
    var_dump(10 === "10");      // bool(false)

    var_dump(1 == true);    // bool(true)
    var_dump(1 === true);   // bool(false)

    // -------------------------------------------
    // verificar se os valores são diferentes
    var_dump(10 != 20);     // bool(true)
    var_dump(5 != 5);       // bool(false)
    var_dump(5 != "5");     // bool(false). Os valores não são diferentes, são iguais
    
    var_dump(5 !== "5");    // bool(true). Avaliamos o valor, mas também o tipo de dados

    var_dump(20 <> 30);     // bool(true). É equivalente ao operador !=

    // IMPORTANTE: no PHP 8, temos o seguinte código:
    var_dump(0 == "joao");
    // uma vez que a string "joao" não pode ser convertida para número, então o PHP
    // converte o 0 para string e compara ambos como string.
    // neste caso dá bool(false);

    // -------------------------------------------
    // os operadores <  >   <=   e   >=   são de fácil entendimento
    
    var_dump(10 > 5);   // bool(true)
    var_dump(10 < 5);   // bool(false)
    var_dump(10 > 10);   // bool(false)
    var_dump(10 >= 10);   // bool(true)
    var_dump(10 <= 10);   // bool(true)

    // uma nota importante:
    var_dump("joao" >= "sara"); // bool(false)
    var_dump("joao" <= "sara"); // bool(true)

    // -------------------------------------------
    // spaceship operator (operador nave espacial)
    // <=>
    var_dump(20 <=> 10);    // int(1)
    var_dump(10 <=> 10);    // int(0)
    var_dump(10 <=> 20);    // int(-1)

    // -------------------------------------------
    // Operadores condicionais:     ??      ?:

    // Operador ternário
    $valor = "joao";
    echo $valor == "joao" ? "SIM" : "NÃO"; // SIM
    
    // null coalescing operator - operador de coalescência nulo
    $valor = null;
    $a = $valor ?? "OK";    // $a = "OK"
    
    $valor = 10;
    $a = $valor ?? "OK";    // $a = 10
    