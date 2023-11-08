<table>
    <tr>
        <th>Nome</th>
        <th>Placa</th>
    </tr>
    <?php foreach ($lista_vagas as $vaga) : ?>
        <tr>
            <td>
                <?php echo $vaga['nome']; ?>
            </td>
            <td>
                <?php echo $vaga['placa_veiculo']; ?>
            </td>
            
            <td>
                <a href="remover_vagas.php?id=<?php echo $vaga['id']; ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
