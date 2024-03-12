<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cor-texto {
            color: red;
        }
    </style>
</head>
<body>
    
    <h1>O meu nome é João!</h1>

    <?php
        $nome = "João Ribeiro" 
    ?>

    <h3>O meu nome é <?php echo $nome ?>!</h3>
    <h3>O meu nome é<?= $nome ?>!</h3>

    <!-- escrever HTML a partir do PHP -->
    <?php 
        echo "<p>Vamos criar um parágrafo de HTML!</p>";
        echo '<p class="cor-texto">Este parágrafo tem uma classe de CSS.</p>';
    ?>


</body>
</html>