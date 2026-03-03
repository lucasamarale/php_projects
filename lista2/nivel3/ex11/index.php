<?php
$base  = '../../';
$nivel = 'Nível 3 – Estrutura de Repetição for';
$titulo = 'Exercício 11 – Tabuada';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 11</span>
        <h2>Tabuada</h2>
        <p>Informe um número e o programa gera a tabuada completa (de 1 a 10) usando um laço <code>for</code>.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="numero">Tabuada do número:</label>
            <input type="number" id="numero" name="numero" min="1" max="100" placeholder="Ex: 7" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Gerar Tabuada</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
