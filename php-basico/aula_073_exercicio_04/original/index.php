<?php
session_start();
$erro = "";
$sucesso = "";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['user'])){
        $erro = "Campo de texto vazio";
    }else {
        $valor = $_POST['user'];

        if(is_numeric($valor)){
            $file = fopen('dados_numericos.txt', 'a');
            fputs($file, $valor . PHP_EOL);
            fclose(($file));
            $sucesso = "valor Numerico guardado com sucesso";
        }elseif(is_string($valor)){
            $file = fopen('dados_string.txt', 'a');
            fputs($file, $valor . PHP_EOL);
            fclose(($file));
            $sucesso = "valor String guardado com sucesso";
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <input type="text" name="user" value="Insira um valor">
        <input type="submit" value="submeter">
    </form>


 <div>
    <?= !empty($erro) ? $erro : $sucesso ?>
 </div>

</body>
</html>