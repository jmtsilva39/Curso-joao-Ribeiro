<?php

// BREAK e CONTINUE

// CONTINUE - permite passar de imediato para a iteração seguinte

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$ignorar = "carlos";
foreach($nomes as $nome){

    if($nome == $ignorar) continue;
    echo "$nome<br>";
}