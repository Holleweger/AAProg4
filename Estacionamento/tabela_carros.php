<table>
    <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
    </tr>
    <?php foreach ($lista_veiculos as $veiculo) : ?>
        <tr>
            <td>
                <a href="tarefa.php?placa=<?php echo $veiculo['placa']; ?>">
                    <?php echo $veiculo['placa']; ?>
                </a>
            </td>
            <td>
                <?php echo $veiculo['marca']; ?>
            </td>
            <td>
                <?php echo $veiculo['modelo']; ?>
            </td>
            
            <td>
                <a href="remover_carros.php?placa=<?php echo $veiculo['placa']; ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
