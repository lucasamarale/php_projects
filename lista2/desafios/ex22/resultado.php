<?php
$base  = '../../';
$nivel = 'Desafios Extras – Misturando Estruturas';
$titulo = 'Exercício 22 – Números Pares de 1 a 50';
include $base . 'includes/header.php';

$pares = [];
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $pares[] = $i;
    }
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 22 – Desafio</span>
        <h2>Números Pares de 1 a 50</h2>
    </div>

    <div class="result-title">Resultado – <?= count($pares) ?> números pares encontrados</div>
    <div class="result-box">
        <span class="result-line"><?= implode(', ', $pares) ?></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
