<form method="POST">
    <fieldset>
        <legend>Novo Veículo</legend>
        <label>
            Placa:
            <?php if ($tem_erros && isset($erros_validacao['placa'])) : ?>
                <span class="erro"><?php echo $erros_validacao['placa']; ?></span>
            <?php endif; ?>
            <input type="text" name="placa" value="<?php echo $veiculo['placa']; ?>" />
        </label>
        <label>
            Marca (Opcional):
            <textarea name="marca"><?php echo $veiculo['marca']; ?></textarea>
        </label>
        <label>
            Modelo (Opcional):
            <textarea name="modelo"><?php echo $veiculo['modelo']; ?></textarea>
        </label>
        <input type="submit"  class="botao" />
    </fieldset>
</form>
