<?php

    /*
        Uma empresa tem várias lojas, cada uma com um endereço de email.
        A variável $cidade indica que dados de email deverão ser apresentados.
        Constrói a lógica condicional e de apresentação do email correspondente
        quando é alterado o valor da cidade escolhida.
    */

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'porto';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>

        <?php
         
         if (isset($lojas[$cidade])) {
            echo '<h3>' . ucfirst($cidade) . '</h3>';
            echo '<p>Email da loja: ' . $lojas[$cidade] . '</p>';
         }else{
            echo '<p> Não existe nenhuma loja na cidade indicada </p>';
         }
         
        ?>

        <h3><!-- nome da cidade (se existe) --></h3>
        <p><!-- email da loja da cidade (se existe) --></p>

        <!-- quando não existe cidade na coleção das $lojas -->
        <p>Não existe nenhuma loja na cidade indicada.</p>

</body>
</html>