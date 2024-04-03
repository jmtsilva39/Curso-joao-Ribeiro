<?php

/*
Este é um pequeno exemplo de como a OOP permite tornar o nosso código
mais bem organizado, mais profissional, mais estruturado.

1. Criar uma classe (class_numero)
2. A classe deverá ter uma propriedade privada número
3. O construtor da classe serve para definir o número
4. O método get_numero() serve para devolver o número

5. O método par_ou_impar() deverá devolver 'par' ou 'impar'após analisar o número

6. O método tabuada() deverá devolver um array com a tabuada do número até 10.
    Exmplo: 3 x 1 = 3
            3 x 2 = 6
            3 x 3 = 9
            ...
7. O método raiz_quadrada() deverá devolver a raz quadrada do número

8. Neste script deveremos importar a classe, criar 4 objetos a partir dela
com os valores 5, 7, 16 e 123.

Para cada uma dessas instâncias, deveremos apresentar:
    a) O número através de get_numero()
    b) Se é par ou impar
    c) A raiz quadrada do número
    d) A tabuada
*/

require_once('classe_numero.php');

$cinco = new numero(5);
$sete = new numero(7);
$dezesseis = new numero(16);
$grande = new numero(123);


echo 'Número:  ' . $cinco->getNumero() . "<br>";
echo 'É par ou Impar : ' . $cinco->parOuImpar() . "<br>";
echo 'Raiz Quadrada : ' . $cinco->raizQuadrada() . "<br>";
echo 'tabuada :' . $cinco->tabuada() . "<br>";
echo "<hr>";