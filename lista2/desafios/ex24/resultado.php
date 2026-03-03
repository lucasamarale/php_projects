<?php
$base  = '../../';
$nivel = 'Desafios Extras – Misturando Estruturas';
$titulo = 'Exercício 24 – Maior Número do Array';
include $base . 'includes/header.php';

$numeros = [34, 7, 91, 12, 56, 3, 78, 45, 23, 99];
$maior   = $numeros[0];

foreach ($numeros as $num) {
    if ($num > $maior) {
        $maior = $num;
    }
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 24 – Desafio</span>
        <h2>Maior Número do Array</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line">📊 Array: [<?= implode(', ', $numeros) ?>]</span>
        <span class="result-line" style="margin-top:0.5rem">
            🏆 O <strong>maior número</strong> é: <strong style="font-size:1.2rem; color:#4f5399"><?= $maior ?></strong>
        </span>
        <span class="result-line" style="font-size:0.85rem; color:#777; margin-top:0.25rem">
            (encontrado sem usar <code>max()</code>, apenas com <code>foreach</code> + <code>if</code>)
        </span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
