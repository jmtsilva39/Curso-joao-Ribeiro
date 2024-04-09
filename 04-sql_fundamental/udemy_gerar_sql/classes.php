<?php

class cliente
{
    public $id;
    public $nome;
    public $sexo;
    public $data_nascimento;
    public $email;
    public $telefone;
    public $morada;
    public $cidade;
    public $cliente_ativo;

}

class colaborador
{
    public $id;
    public $nome;
    public $sexo;
    public $ativo;
}

class encomenda
{
    public $id;
    public $id_cliente;
    public $id_colaborador;
    public $data_hora;
    public $paga;
    public $cancelada;
    public $itens;  // encomendas_produtos
}

class encomendas_produtos
{
    public $id;
    public $id_encomenda;
    public $id_produto;
    public $quantidade;
}