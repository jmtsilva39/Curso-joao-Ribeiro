<?php

// importar a class Database e configurações

use sys4soft\Database;

require_once('Database.php');

// instanciação de objeto Database

$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => '123456',


];

$database = new Database($config);

// parametros
$params = [
    ':nome' => $_POST['text_nome'],
    ':email' => $_POST['text_email']
];

// inserir os dados do cliente

$result = $database->execute_non_query("INSERT INTO clientes(nome,email, created_at)
                                        VALUES(:nome, :email, NOW())", $params);

// voltar ao formulário automaticamente
header('Location: formulario.php');