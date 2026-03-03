<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 06 – Positivo, Negativo ou Zero';
include $base . 'includes/header.php';

$numero = (float) ($_POST['numero'] ?? 0);

if ($numero > 0) {
    $resultado = 'Positivo';
    $icone     = '📈';
} elseif ($numero < 0) {
    $resultado = 'Negativo';
    $icone     = '📉';
} else {
    $resultado = 'Zero';
    $icone     = '⚖️';
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 06</span>
        <h2>Positivo, Negativo ou Zero</h2>
        <p>Número informado: <strong><?= $numero ?></strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><?= $icone ?> O número <strong><?= $numero ?></strong> é <strong><?= $resultado ?></strong>.</span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Verificar Outro Número</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
