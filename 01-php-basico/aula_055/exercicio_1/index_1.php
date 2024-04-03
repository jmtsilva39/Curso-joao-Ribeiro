<?php
echo '<pre>';

// Uma forma muito simples de obter o 
// tamanho de um ficheiro em bytes
$dados = filesize('registos.txt');
echo $dados . ' bytes';

echo '<hr>';

// E para obter várias informações sobre
// um determinado ficheiro.
$info = pathinfo('registos.txt');
print_r($info);