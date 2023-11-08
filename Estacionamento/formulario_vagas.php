<form method="POST">
    <input type="hidden" name="id" value="<?php echo $vaga['id']; ?>" />
    <fieldset>
        <legend>Nova Vaga</legend>
        <label>
            Nome:
            <?php if ($tem_erros && isset($erros_validacao['nome'])) : ?>
                <span class="erro"><?php echo $erros_validacao['nome']; ?></span>
            <?php endif; ?>
            <input type="text" name="nome" value="<?php echo $vaga['nome']; ?>" />
        </label>
        <label>
            Placa:
            <textarea name="placa_veiculo"><?php echo $vaga['placa_veiculo']; ?></textarea>
        </label>
        
        <input type="submit" class="botao" />
    </fieldset>
</form>
