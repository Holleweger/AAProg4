<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "banco.php";
include "ajudantes.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];

if (tem_post()) {
    $vaga = array();

    if (array_key_exists('nome', $_POST)) {
        $vaga['nome'] = $_POST['nome'];
    } else {
        $vaga['nome'] = '';
    }

    if (array_key_exists('placa_veiculo', $_POST) && $_POST['placa_veiculo'] != '') {
        $vaga['placa_veiculo'] = $_POST['placa_veiculo'];
    } else {
        $tem_erros = true;
        $erros_validacao['placa_veiculo'] = 'A placa é obrigatória!';
    }
    
    if (! $tem_erros) {
        echo 'teste';
        gravar_vaga($conexao, $vaga);

        header('Location: main.php');
        die();
    }
}

$lista_vagas = buscar_vagas($conexao);

$vaga = [
    'id'         => 0,
    'nome'       => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'placa_veiculo'  => (isset($_POST['placa_veiculo'])) ? $_POST['placa_veiculo'] : ''
];

include "template_vagas.php";
