<?php

/*
        Usando como ponto de partida o array de produtos,
        inverte a ordem dos mesmos, acrescenta no final
        'maçã' e 'pêra' e apresenta numa ul.
    */

$produtos = ['arroz', 'batata', ' laranja'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>


    <?php
    $produtos = array_reverse($produtos);
    array_push($produtos, "maça", "pêra");
    ?>

    <ul>
        <li><?php echo $produtos[0] ?></li>
        <li><?php echo $produtos[1] ?></li>
        <li><?php echo $produtos[2] ?></li>
        <li><?php echo $produtos[3] ?></li>
        <li><?php echo $produtos[4] ?></li>
    </ul>



</body>

</html>