<?php

// OPERADOR TERNÁRIO

$idade = 15;
echo "Eu sou " . ($idade >= 18 ? 'maior de idade.' : 'menor de idade.');

echo '<br>';

$erro = true;
echo 'Resultado: ' . ($erro ? 'aconteceu um erro' : 'sucesso');