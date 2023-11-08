<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "banco.php";
include "ajudantes.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    $veiculo = array();

    if (array_key_exists('placa', $_POST) && $_POST['placa'] != '') {
        $veiculo['placa'] = $_POST['placa'];
    } else {
        $tem_erros = true;
        $erros_validacao['placa'] = 'A placa é obrigatória!';
    }

    if (array_key_exists('marca', $_POST)) {
        $veiculo['marca'] = $_POST['marca'];
    } else {
        $veiculo['marca'] = '';
    }

    if (array_key_exists('modelo', $_POST)) {
        $veiculo['modelo'] = $_POST['modelo'];
    } else {
        $veiculo['modelo'] = '';
    }

    if (! $tem_erros) {
        gravar_veiculo($conexao, $veiculo);
        header('Location: main.php');
        die();
    }

}

$lista_veiculos = buscar_veiculos($conexao);

$veiculo = [
    'placa'       => (isset($_POST['placa'])) ? $_POST['placa'] : '',
    'marca'  => (isset($_POST['marca'])) ? $_POST['marca'] : '',
    'modelo'  => (isset($_POST['modelo'])) ? $_POST['modelo'] : ''
];

include "template_carros.php";
