<?php
$base  = '../../';
$nivel = 'Nível 6 – foreach com Arrays';
$titulo = 'Exercício 19 – Somar Valores de Array';
include $base . 'includes/header.php';

$numeros = [10, 25, 8, 42, 15];
$soma = 0;
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 19</span>
        <h2>Somar Valores de Array</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php foreach ($numeros as $num): ?>
            <span class="result-line">Somando: <?= $soma ?> + <?= $num ?> = <strong><?= $soma += $num ?></strong></span>
        <?php endforeach; ?>
        <span class="result-line" style="margin-top:0.5rem; border-top:1px solid #ccc; padding-top:0.5rem">
            ✅ <strong>Total: <?= $soma ?></strong>
        </span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
