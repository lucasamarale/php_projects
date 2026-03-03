<?php
$base  = '../../';
$nivel = 'Nível 3 – Estrutura de Repetição for';
$titulo = 'Exercício 12 – Soma de 1 a 100';
include $base . 'includes/header.php';

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 12</span>
        <h2>Soma de 1 a 100</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line">1 + 2 + 3 + ... + 99 + 100 = <strong><?= $soma ?></strong></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
