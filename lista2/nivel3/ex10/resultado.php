<?php
$base  = '../../';
$nivel = 'Nível 3 – Estrutura de Repetição for';
$titulo = 'Exercício 10 – Contagem Regressiva';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 10</span>
        <h2>Contagem Regressiva</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php for ($i = 10; $i >= 1; $i--): ?>
            <span class="result-line"><?= $i ?></span>
        <?php endfor; ?>
        <span class="result-line"><strong>🚀 Lançamento!</strong></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
