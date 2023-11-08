<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Estacionamento</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css" />
    </head>
    <body>
        <div id="bloco_principal">
            <h1>Gerenciador de Estacionamento</h1>

            <?php include('formulario_vagas.php'); ?>

            <?php if ($exibir_tabela) : ?>
                <?php include('tabela_vagas.php'); ?>
            <?php endif; ?>
        </div>
    </body>
</html>
