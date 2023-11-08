<?php
include "banco.php";

remover_veiculo($conexao, $_GET['placa']);

header('Location: main.php');
