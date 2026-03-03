<?php
$base  = '../../';
$nivel = 'Nível 3 – Estrutura de Repetição for';
$titulo = 'Exercício 09 – Contagem de 1 a 10';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 09</span>
        <h2>Contagem de 1 a 10</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <span class="result-line"><?= $i ?></span>
        <?php endfor; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
