<?php
$base  = '../../';
include $base . 'includes/post_guard.php';

$nivel  = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 07 – Par ou Ímpar';
include $base . 'includes/header.php';

$numero = (int) ($_POST['numero'] ?? 0);

if ($numero % 2 == 0) {
    $resultado = 'Par';
    $icone     = '✅';
} else {
    $resultado = 'Ímpar';
    $icone     = '🔢';
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 07</span>
        <h2>Par ou Ímpar</h2>
        <p>Número informado: <strong><?= $numero ?></strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><?= $icone ?> O número <strong><?= $numero ?></strong> é <strong><?= $resultado ?></strong>.</span>
        <span class="result-line" style="font-size:0.85rem; color:#777"><?= $numero ?> % 2 = <?= $numero % 2 ?></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Verificar Outro Número</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
