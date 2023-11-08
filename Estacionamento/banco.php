<?php
include "config.php";

$conexao = mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

function buscar_veiculos($conexao)
{
    $sqlBusca = 'SELECT * FROM 387039_carros';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $veiculos = array();

    while ($veiculo = mysqli_fetch_assoc($resultado)) {
        $veiculos[] = $veiculo;
    }

    return $veiculos;
}


function buscar_veiculo($conexao, $placa)
{
    $sqlBusca = 'SELECT * FROM 387039_carros WHERE placa = ' . "'" . $placa ; "'";
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function gravar_veiculo($conexao, $veiculo)
{
    $sqlGravar = "
        INSERT INTO 387039_carros
        (placa, marca, modelo)
        VALUES
        (
            '{$veiculo['placa']}',
            '{$veiculo['marca']}',
            '{$veiculo['modelo']}'

        )
    ";

    mysqli_query($conexao, $sqlGravar);
}

function editar_veiculo($conexao, $veiculo)
{
    $sqlEditar = "
        UPDATE 387039_carros SET
            marca = '{$veiculo['marca']}',
            modelo = {$veiculo['modelo']}
        WHERE placa = {$veiculo['placa']}
    ";

    mysqli_query($conexao, $sqlEditar);
}

function remover_veiculo($conexao, $placa)
{
    $sqlRemover = "DELETE FROM 387039_carros WHERE placa = '{$placa}'";

    mysqli_query($conexao, $sqlRemover);
}





function buscar_vagas($conexao)
{
    $sqlBusca = 'SELECT * FROM 387039_vagas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $vagas = array();

    while ($vaga = mysqli_fetch_assoc($resultado)) {
        $vagas[] = $vaga;
    }

    return $vagas;
}


function buscar_vaga($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM 387039_vagas WHERE id = ' .  $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function gravar_vaga($conexao, $vaga)
{
    $result= mysqli_query($conexao,"SELECT count(*) as total from 387039_vagas");
    $data=mysqli_fetch_assoc($result);
    echo $data['total'];

    if($data['total'] < 10) {
    $sqlGravar = "
        INSERT INTO 387039_vagas
        (nome, placa_veiculo)
        VALUES
        (
            '{$vaga['nome']}',
            '{$vaga['placa_veiculo']}'

        )
    ";
        } else {
            throw new Exception('Limite de Vagas Excedido');
        }

    mysqli_query($conexao, $sqlGravar);
}

function editar_vaga($conexao, $veiculo)
{
    $sqlEditar = "
        UPDATE 387039_carros SET
            marca = '{$veiculo['marca']}',
            modelo = {$veiculo['modelo']}
        WHERE placa = {$veiculo['placa']}
    ";

    mysqli_query($conexao, $sqlEditar);
}

function remover_vaga($conexao, $id)
{
    $sqlRemover = "DELETE FROM 387039_vagas WHERE id = '{$id}'";

    mysqli_query($conexao, $sqlRemover);
}