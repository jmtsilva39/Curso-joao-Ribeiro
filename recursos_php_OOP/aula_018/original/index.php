<?php

/* 
1. Criar uma classe Humanos.

2. A classe deve ter 3 propriedades privadas onde 
   vamos guardar masculinos, femininos e desconhecidos

3. No método definir() devemos passar dois argumentos:
   sexo e nome.
   O método deverá implementar a lógica para construir
   as coleções de homens, mulheres e desconhecidos

4. Deverá implementar 3 métodos, cada um deles para
   devolver a coleção de nomes masculinos, femininos e desconhecidos

5. Neste script já existem, uma coleção de dados.
   Deverás importar a classe Humanos, instanciar num objeto $humanos.
   Iterar por todos os elementos da coleção $dados e passar a informação
   para dentro do objeto $humanos.

6. Finalmente, criar uma estrutura básica de HTML dentro do script
   e apresentar um título h1 para cada tipo de identidade e uma
   lista desordenada que vai apresentar cada um dos nomes de cada
   entidade colecionada (masculinos, femininos e desconhecidos)

   Deves separar cada uma das coleções com uma horizontal rule

   NOTA: m ou M = masculino
         f ou F = feminino
         outros... desconhecido
*/
require_once('humanos.php');

$dados = [
   ['m', 'João Ribeiro'],
   ['f', 'Ana Silva'],
   ['M', 'Carlos Martins'],
   ['m', 'Joaquim Santos'],
   ['f', 'Marta Rodrigues'],
   ['M', 'Rui Fernandes'],
   ['F', 'Márcia Antunes'],
   ['g', 'Pantufa'],
   ['f', 'Carla Maria'],
   ['M', 'Fernando Joaquim'],
   ['m', 'Ricardo Moita'],
   ['c', 'Lassie'],
   ['F', 'Daniela Cardoso'],
   ['F', 'Susana Dinis'],
];


$humanos = new Humanos();

foreach ($dados as $dado) {
   $humanos->definir($dado[0], $dado[1]);
}

$masculinos = $humanos->getMasculinos();
$femininos = $humanos->getFemininos();
$desconhecidos = $humanos->getDesconhecidos();
?>


<h1>MASCULINOS</h1>


<ul>
   <?php foreach ($masculinos as $nome) : ?>
      <li><?= $nome ?></li>
   <?php endforeach; ?>

</ul>

<h1>Femininos</h1>


<ul>
   <?php foreach ($femininos as $nome) : ?>
      <li><?= $nome ?></li>
   <?php endforeach; ?>

</ul>

<h1>Desconhecidos</h1>


<ul>
   <?php foreach ($desconhecidos as $nome) : ?>
      <li><?= $nome ?></li>
   <?php endforeach; ?>

</ul>