<?php
$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 05 – Verificar Maioridade';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 05</span>
        <h2>Verificar Maioridade</h2>
        <p>Informe uma idade e o programa verifica se a pessoa é maior ou menor de idade.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="0" max="130" placeholder="Ex: 16" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Verificar</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
