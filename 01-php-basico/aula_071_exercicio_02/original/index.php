<?php

// iniciação dos arrays
$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];

// lógica aqui...
//Nome do arquivo
$arquivo = 'dados.dat';
$linhas = file($arquivo);

foreach ($linhas as $linha) {


    /* 
    //Verifica se a linha contém a palavra 'teste';

    if(stripos($linha, 'teste') !==false){
        $textos_teste[] = $linha;
    }
    //Verifica se a linha é numérica e positiva
    elseif(is_numeric($linha) && $linha >0){
        $numeros_positivos[] = $linha;

    //Verifica se a linha é numérica e negativa
    }elseif(is_numeric($linha) && $linha < 0){
        $numeros_negativos[] = $linha;

    }elseif((stripos($linha, 'teste') !==false)){
            $textos_teste[] = $linha;
    }
    elseif($linha !=0) {
        $textos[]=$linha;
    }
    */

    // MELHORANDO O CÓDIGO
if(is_numeric($linha)){
    if($linha > 0){
        $numeros_positivos[] = $linha;
    }else if($linha < 0){
        $numeros_negativos[] = $linha;
    }
    continue;
}


if(str_contains($linha, 'TESTE')){
    $textos_teste[] = $linha;
}else{
    $textos[] = $linha;
}



}

    

// apresentação dos arrays
echo '<pre>' . "Aqui são os positivos:" . '<br>';
print_r($numeros_positivos);
echo '<hr>' . " Aqui são os negativos:" . '<br>';
print_r($numeros_negativos);
echo '<hr>' . "Aqui os textos testes" . '<br>';
print_r($textos_teste);
echo '<hr>' . 'Aqui os textos sem a palavra teste' . '<br>';
print_r($textos);