<?php
include "banco.php";

remover_vaga($conexao, $_GET['id']);

header('Location: main.php');
