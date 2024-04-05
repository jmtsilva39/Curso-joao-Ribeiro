<?php

use sys4soft\Database;

// importar a class Database e configurações

require_once('Database.php');


$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => '123456',
];

// instanciação de objeto Database

$database = new Database($config);

// resultados
$resultados = $database->execute_query("SELECT * FROM clientes");

// // ver os dados
/*
echo '<pre>';
print_r($results);
die();
*/
$total_clientes = $resultados->affected_rows;
$results = $resultados->results;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO - Apresentar dados</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
        }

        .caixa-cliente {
            border: 1px solid gray;
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <h3>DADOS DOS MEUS CLIENTES</h3>

    <!-- apresentação dos dados -->

    <?php if ($total_clientes == 0) : ?>
        <p>Não foram encontrados Registros</p>
    <?php else : ?>
        <?php foreach ($results as $cliente) : ?>
            <p>Nome: <strong><?= $cliente->nome ?></strong></p>
            <p>Email: <strong><?= $cliente->email ?></strong></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>


    <p>Total: <strong><?= $total_clientes ?>  Cliente(s)</strong></p>
</body>

</html>