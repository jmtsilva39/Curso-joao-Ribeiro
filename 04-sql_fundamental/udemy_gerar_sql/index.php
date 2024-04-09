<?php

include_once 'dados.php';
include_once 'classes.php';

// triggers
$opt_total_clientes = 200;
$opt_nomes_principais = 2;
$opt_apelidos = 2;
$opt_total_colaboradores = 20;
$opt_total_encomendas = 10000;

$CLIENTES = [];
$COLABORADORES = [];
$ENCOMENDAS = [];

$CLIENTES = criar_clientes();
$COLABORADORES = criar_colaboradores();
$ENCOMENDAS = criar_encomendas();

criar_sql();


// ==============================================
function criar_clientes()
{
    global $opt_total_clientes;
    $id = 1;
    for ($i = 0; $i < $opt_total_clientes; $i++) {

        $cliente = new cliente();

        $sexo = ['m', 'f'][rand(0, 1)];

        $avancar = false;
        while (!$avancar) {
            $nome_tmp = gerar_nome($sexo);
            if (verificar_nome($nome_tmp)) {
                $cliente->nome = $nome_tmp;
                $avancar = true;
            }
        }

        $cliente->id = $id++;
        $cliente->sexo = $sexo;
        $cliente->data_nascimento = gerar_data_nascimento();
        $cliente->email = gerar_email($cliente->nome);
        $cliente->telefone = gerar_telefone();
        $cliente->morada = gerar_morada();
        $cliente->cidade = gerar_cidade();
        $cliente->cliente_ativo = rand(0, 1000) <= 950 ? 1 : 0;

        $CLIENTES[] = $cliente;
    }
    return $CLIENTES;
}

// ==============================================
function criar_colaboradores()
{
    global $COLABORADORES;
    global $opt_total_colaboradores;
    global $nomes_masculinos;
    global $nomes_femininos;
    global $apelidos;

    for ($i = 1; $i <= $opt_total_colaboradores; $i++) {
        $colaborador = new colaborador();
        $sexo = ['m', 'f'][rand(0, 1)];

        $avancar = false;
        while (!$avancar) {
            $tmp = '';
            if ($sexo == 'm') {
                $tmp .= $nomes_masculinos[rand(0, count($nomes_masculinos) - 1)] . ' ';
            } else {
                $tmp .= $nomes_femininos[rand(0, count($nomes_femininos) - 1)] . ' ';
            }
            $tmp .= $apelidos[rand(0, count($apelidos) - 1)];

            if (!in_array($tmp, $COLABORADORES)) {
                $avancar = true;
                $colaborador->id = $i;
                $colaborador->nome = $tmp;
                $colaborador->sexo = $sexo;
                $colaborador->ativo = rand(0, 1000) <= 950 ? 1 : 0;
                $COLABORADORES[] = $colaborador;
            }
        }
    }
    return $COLABORADORES;
}

// ==============================================
function verificar_nome($nome)
{
    global $CLIENTES;
    if (empty($CLIENTES)) {
        return true;
    }
    foreach ($CLIENTES as $cliente) {
        if ($cliente->nome == $nome) {
            return false;
        }
    }
    return true;
}

// ==============================================
function gerar_nome($sexo = 'm')
{
    global $opt_nomes_principais;
    global $opt_apelidos;
    global $nomes_masculinos;
    global $nomes_femininos;
    global $apelidos;

    $nomes = [];

    // nomes principais
    $i = 0;
    while ($i < $opt_nomes_principais) {
        $tmp = '';
        if ($sexo == 'm') {
            $tmp = $nomes_masculinos[rand(0, count($nomes_masculinos) - 1)];
        } else {
            $tmp = $nomes_femininos[rand(0, count($nomes_femininos) - 1)];
        }
        if (!in_array($tmp, $nomes)) {
            $nomes[] = $tmp;
            $i++;
        }
    }

    // apelidos
    $i = 0;
    while ($i < $opt_apelidos) {
        $tmp = $apelidos[rand(0, count($apelidos) - 1)];
        if (!in_array($tmp, $nomes)) {
            $nomes[] = $tmp;
            $i++;
        }
    }

    return implode(' ', $nomes);
}

// ==============================================
function gerar_data_nascimento()
{
    $dia = rand(1, 28);
    $mes = rand(1, 13);
    $ano = rand(1950, 2006);
    $data_nascimento = DateTime::createFromFormat('d-m-Y', "$dia-$mes-$ano");
    $data_nascimento->setTime(0, 0, 0);
    return $data_nascimento->format('Y-m-d H:i:s');
}

// ==============================================
function gerar_email($nome)
{
    global $dominios;

    $chars = [
        'a' => 'a,á,à,â,ã',
        'b' => 'b',
        'c' => 'c,ç',
        'd' => 'd',
        'e' => 'e,é,è,ê',
        'f' => 'f',
        'g' => 'g',
        'h' => 'h',
        'i' => 'i,í,ì,î',
        'j' => 'j',
        'k' => 'k',
        'l' => 'l',
        'm' => 'm',
        'n' => 'n',
        'o' => 'o,ó,ò,ô,õ',
        'p' => 'p',
        'q' => 'q',
        'r' => 'r',
        's' => 's',
        't' => 't',
        'u' => 'u,ú,ù,û',
        'v' => 'v',
        'w' => 'w',
        'x' => 'x',
        'y' => 'y',
        'z' => 'z',
    ];

    $nomes = explode(" ", strtolower($nome));
    $nome1 = $nomes[0];
    $nome2 = $nomes[1];

    $email = '';
    $tmp = mb_str_split($nome1);
    foreach ($tmp as $c) {
        $char = strtolower($c);
        foreach ($chars as $key => $value) {
            if (strpos($value, $char) !== false) {
                $email .= $key;
                break;
            }
        }
    }
    $email .= '.' . rand(10, 999) . '.';
    $tmp = mb_str_split($nome2);
    foreach ($tmp as $c) {
        $char = strtolower($c);
        foreach ($chars as $key => $value) {
            if (strpos($value, $char) !== false) {
                $email .= $key;
                break;
            }
        }
    }
    $email .= $dominios[rand(0, count($dominios) - 1)];
    return $email;
}

// ==============================================
function gerar_telefone()
{
    return rand(900000000, 999999999);
}

// ==============================================
function gerar_morada()
{
    global $morada_inicial;
    global $apelidos;

    $morada = '';
    $morada .= $morada_inicial[rand(0, count($morada_inicial) - 1)] . ' ';
    $nomes = [];

    for ($i = 1; $i <= 2; $i++) {

        $avancar = false;
        while (!$avancar) {
            $tmp = $apelidos[rand(0, count($apelidos) - 1)];
            if (!in_array($tmp, $nomes)) {
                $nomes[] = $tmp;
                $avancar = true;
            }
        }
    }

    $morada .= $nomes[0] . ' ' . $nomes[1];
    $morada .= ' n.º' . rand(1, 999) . ' ';
    $morada .= rand(1, 6) . 'º ' . ['Esq', 'Drt'][rand(0, 1)];
    return $morada;
}

// ==============================================
function gerar_cidade()
{
    global $cidades;
    return $cidades[rand(0, count($cidades) - 1)];
}


// ==============================================
// ENCOMENDAS
// ==============================================
function criar_encomendas()
{
    global $opt_total_encomendas;
    global $produtos;
    global $CLIENTES;
    global $COLABORADORES;

    $data_encomenda = new DateTime();
    $data_encomenda->setDate(2030, 1, 1);
    $data_encomenda->setTime(9, 0, 0);

    $ENCOMENDAS = [];

    $id_encomenda_produto = 1;

    $index = 1;
    while ($index <= $opt_total_encomendas) {

        // encomenda

        $id_cliente = rand(0, count($CLIENTES) - 1);
        $id_colaborador = rand(0, count($COLABORADORES) - 1);

        if ($CLIENTES[$id_cliente]->cliente_ativo != 0 && $COLABORADORES[$id_colaborador]->ativo != 0) {

            $tmp_encomenda = new encomenda();
            $tmp_encomenda->id = $index;
            $tmp_encomenda->id_cliente = $CLIENTES[$id_cliente]->id;
            $tmp_encomenda->id_colaborador = $COLABORADORES[$id_colaborador]->id;
            $tmp_encomenda->data_hora = $data_encomenda->format('Y-m-d H:i:s');

            // paga / cancelada
            if (rand(1, 1000) < 970) {
                if (rand(1, 1000) < 970) {
                    $tmp_encomenda->paga = 1;
                } else {
                    $tmp_encomenda->paga = 0;
                }
                $tmp_encomenda->cancelada = 0;
            } else {
                $tmp_encomenda->paga = 0;
                $tmp_encomenda->cancelada = 1;
            }

            // produtos da encomenda
            if ($tmp_encomenda->cancelada == 0) {

                $total_items = rand(1, 10);
                $ENCOMENDA_PRODUTOS = [];

                $tmp_produtos_encomenda = [];
                for ($aa = 1; $aa <= $total_items; $aa++) {
                    $avancar = false;
                    while (!$avancar) {
                        $tmp_id_produto = rand(1, count($produtos));
                        if (!in_array($tmp_id_produto, $tmp_produtos_encomenda)) {
                            $avancar = true;
                            $tmp_produtos_encomenda[] = $tmp_id_produto;
                        }
                    }
                }

                foreach ($tmp_produtos_encomenda as $id_produto) {
                    $tmp = new encomendas_produtos();
                    $tmp->id = $id_encomenda_produto++;
                    $tmp->id_encomenda = $index;
                    $tmp->id_produto = $id_produto;
                    $tmp->quantidade = rand(1, 10);
                    $ENCOMENDA_PRODUTOS[] = $tmp;
                }

                $tmp_encomenda->itens = $ENCOMENDA_PRODUTOS;
            }

            $ENCOMENDAS[] = $tmp_encomenda;

            // atualiza a data e hora da próxima encomenda
            $data_encomenda->add(new DateInterval('PT' . rand(15, 180) . 'M' . rand(0, 60) . 'S'));

            $index++;
        }
    }

    return $ENCOMENDAS;
}

// ==============================================
// CRIAR FICHEIRO SQL
// ==============================================
function criar_sql()
{
    global $CLIENTES, $COLABORADORES, $produtos, $ENCOMENDAS;

    $filename = 'output_' . time() . '.sql';
    $file = fopen($filename, 'w');

    fputs($file, "DROP DATABASE IF EXISTS `udemy_loja_online`;" . PHP_EOL);
    fputs($file, "CREATE DATABASE IF NOT EXISTS `udemy_loja_online`;" . PHP_EOL);
    fputs($file, "USE `udemy_loja_online`;" . PHP_EOL);

    // ------------------------------------------
    // clientes
    fputs($file, "DROP TABLE IF EXISTS `clientes`;" . PHP_EOL);
    fputs($file, "CREATE TABLE IF NOT EXISTS `clientes` (" . PHP_EOL);
    fputs($file, "  `id` int(10) unsigned NOT NULL AUTO_INCREMENT," . PHP_EOL);
    fputs($file, "  `nome` varchar(100) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `sexo` varchar(1) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `data_nascimento` datetime DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `email` varchar(50) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `telefone` varchar(10) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `morada` varchar(50) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `cidade` varchar(50) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `cliente_ativo` tinyint(3) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  PRIMARY KEY (`id`)" . PHP_EOL);
    fputs($file, ") ENGINE=InnoDB DEFAULT CHARSET=latin1;" . PHP_EOL);

    fputs($file, "" . PHP_EOL);

    fputs($file, "INSERT INTO `clientes` (`id`, `nome`, `sexo`, `data_nascimento`, `email`, `telefone`, `morada`, `cidade`, `cliente_ativo`) VALUES" . PHP_EOL);

    $i = 1;
    foreach ($CLIENTES as $cliente) {
        $str = "  " .
            "(" . $cliente->id . ", " .
            "'" . $cliente->nome . "', " .
            "'" . $cliente->sexo . "', " .
            "'" . $cliente->data_nascimento . "', " .
            "'" . $cliente->email . "', " .
            "'" . $cliente->telefone . "', " .
            "'" . $cliente->morada . "', " .
            "'" . $cliente->cidade . "', " .
            "" . $cliente->cliente_ativo . ")";
        if ($i < count($CLIENTES)) {
            $str .= ',';
        } else {
            $str .= ';';
        }
        fputs($file, $str . PHP_EOL);
        $i++;
    }

    fputs($file, "" . PHP_EOL);

    // ------------------------------------------
    // colaboradores
    fputs($file, "DROP TABLE IF EXISTS `colaboradores`;" . PHP_EOL);
    fputs($file, "CREATE TABLE IF NOT EXISTS `colaboradores` (" . PHP_EOL);
    fputs($file, "  `id` int(10) unsigned NOT NULL AUTO_INCREMENT," . PHP_EOL);
    fputs($file, "  `nome` varchar(50) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `sexo` varchar(1) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `ativo` tinyint(3) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  PRIMARY KEY (`id`)" . PHP_EOL);
    fputs($file, ") ENGINE=InnoDB DEFAULT CHARSET=latin1;" . PHP_EOL);

    fputs($file, "" . PHP_EOL);

    fputs($file, "INSERT INTO `colaboradores` (`id`, `nome`, `sexo`, `ativo`) VALUES" . PHP_EOL);

    $i = 1;
    foreach ($COLABORADORES as $colaborador) {
        $str = "  " .
            "(" . $colaborador->id . ", " .
            "'" . $colaborador->nome . "', " .
            "'" . $colaborador->sexo . "', " .
            "" . $colaborador->ativo . ")";
        if ($i < count($COLABORADORES)) {
            $str .= ',';
        } else {
            $str .= ';';
        }
        fputs($file, $str . PHP_EOL);
        $i++;
    }

    fputs($file, "" . PHP_EOL);

    // -----------------------------------------
    // encomendas
    fputs($file, "DROP TABLE IF EXISTS `encomendas`;" . PHP_EOL);
    fputs($file, "CREATE TABLE IF NOT EXISTS `encomendas` (" . PHP_EOL);
    fputs($file, "  `id` int(10) unsigned NOT NULL AUTO_INCREMENT," . PHP_EOL);
    fputs($file, "  `id_cliente` int(10) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `id_colaborador` int(10) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `data_hora` datetime DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `paga` tinyint(3) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `cancelada` tinyint(4) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  PRIMARY KEY (`id`)" . PHP_EOL);
    fputs($file, ") ENGINE=InnoDB DEFAULT CHARSET=latin1;" . PHP_EOL);

    fputs($file, "" . PHP_EOL);

    fputs($file, "INSERT INTO `encomendas` (`id`, `id_cliente`, `id_colaborador`, `data_hora`, `paga`, `cancelada`) VALUES" . PHP_EOL);

    $i = 1;
    foreach ($ENCOMENDAS as $encomenda) {
        $str = "  " .
            "(" . $encomenda->id . ", " .
            "" . $encomenda->id_cliente . ", " .
            "" . $encomenda->id_colaborador . ", " .
            "'" . $encomenda->data_hora . "', " .
            "" . $encomenda->paga . ", " .
            "" . $encomenda->cancelada . ")";

        if ($i < count($ENCOMENDAS)) {
            $str .= ',';
        } else {
            $str .= ';';
        }
        fputs($file, $str . PHP_EOL);
        $i++;
    }

    fputs($file, "" . PHP_EOL);


    // ----------------------------------------------
    // produtos

    fputs($file, "DROP TABLE IF EXISTS `produtos`;" . PHP_EOL);
    fputs($file, "CREATE TABLE IF NOT EXISTS `produtos` (" . PHP_EOL);
    fputs($file, "  `id` int(10) unsigned NOT NULL AUTO_INCREMENT," . PHP_EOL);
    fputs($file, "  `produto` varchar(50) DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `preco_unidade` float unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  PRIMARY KEY (`id`)" . PHP_EOL);
    fputs($file, ") ENGINE=InnoDB DEFAULT CHARSET=latin1;" . PHP_EOL);

    fputs($file, "" . PHP_EOL);

    fputs($file, "INSERT INTO `produtos` (`id`, `produto`, `preco_unidade`) VALUES" . PHP_EOL);

    $i = 1;
    foreach ($produtos as $produto) {
        $str = "  " .
            "(" . $i . ", " .
            "'" . $produto[0] . "', " .
            "" . $produto[1] . ")";

        if ($i < count($produtos)) {
            $str .= ',';
        } else {
            $str .= ';';
        }
        fputs($file, $str . PHP_EOL);
        $i++;
    }

    fputs($file, "");


    // ----------------------------------------------
    // encomendas produtos

    fputs($file, "DROP TABLE IF EXISTS `encomendas_produtos`;" . PHP_EOL);
    fputs($file, "CREATE TABLE IF NOT EXISTS `encomendas_produtos` (" . PHP_EOL);
    fputs($file, "  `id` int(10) unsigned NOT NULL AUTO_INCREMENT," . PHP_EOL);
    fputs($file, "  `id_encomenda` int(10) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `id_produto` int(10) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  `quantidade` int(10) unsigned DEFAULT NULL," . PHP_EOL);
    fputs($file, "  PRIMARY KEY (`id`)" . PHP_EOL);
    fputs($file, ") ENGINE=InnoDB DEFAULT CHARSET=latin1;" . PHP_EOL);

    fputs($file, "" . PHP_EOL);

    fputs($file, "INSERT INTO `encomendas_produtos` (`id`, `id_encomenda`, `id_produto`, `quantidade`) VALUES" . PHP_EOL);

    $ultima_encomenda = false;
    foreach ($ENCOMENDAS as $encomenda) {
        if ($encomenda->id == count($ENCOMENDAS)) {
            $ultima_encomenda = true;
        }
        if (!empty($encomenda->itens)) {
            $index = 1;
            foreach ($encomenda->itens as $item) {
                $str = "  " .
                    "(" . $item->id . ", " .
                    "" . $item->id_encomenda . ", " .
                    "" . $item->id_produto . ", " .
                    "" . $item->quantidade . ")";

                if ($ultima_encomenda && count($encomenda->itens) == $index) {
                    $str .= ";";
                    fputs($file, $str . PHP_EOL . '-- END');
                } else {
                    $str .= ",";
                    fputs($file, $str . PHP_EOL);
                }

                $index++;
            }
        }
    }


    fclose($file);

    echo PHP_EOL . str_repeat('-', 50) . PHP_EOL;
    echo 'UDEMY LOJA ONLINE' . PHP_EOL;
    echo str_repeat('-', 50) . PHP_EOL;
    echo 'Foi criado o ficheiro ' . $filename . PHP_EOL;
    echo 'Este dump contém: ' . PHP_EOL;
    echo 'Clientes: ' . count($CLIENTES) . PHP_EOL;
    echo 'Colaboradores: ' . count($COLABORADORES) . PHP_EOL;
    echo 'Produtos: ' . count($produtos) . PHP_EOL;
    echo 'Encomendas: ' . count($ENCOMENDAS) . PHP_EOL;
    echo str_repeat('-', 50) . PHP_EOL;
}
