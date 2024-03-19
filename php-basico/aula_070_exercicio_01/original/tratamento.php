<?php
// lógica de tratamento do formulário

SESSION_START();

//VERIFICA SE HOUVE UM POST
if ($_SERVER['REQUEST_METHOD'] = !'POST') {
    die('Acesso Negado!');
}



//VERIFICAR SE OS VALORES EXISTEM


if (empty($_POST['usuario'])    || empty($_POST['senha'])) {
    $_SESSION['erro'] = " Os dois valores são de preenchimento obrigatório";
    header("Location: index.php");
    return;
}


//VERIFICAR SE OS DOIS CAMPOS SÃO NÚMERICOS E POSITIVOS


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$resultado = $usuario * $senha;


if (!(is_int($_POST['usuario']) || $_POST['usuario'] >= 0) || !(is_int($_POST['senha']) || $_POST['senha'] >= 0)) {
    $_SESSION['erro'] = "Os dois valores tem que ser positivos";
    header("Location: index.php");
}

//APRESENTAR O RESULTADO 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>Resultado: </H1>
    <h3><?= "$usuario x $senha = $resultado" ?></h3>

</html>
</body>

</html>