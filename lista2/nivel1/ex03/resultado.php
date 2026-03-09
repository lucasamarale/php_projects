<?php
$base  = '../../';
include $base . 'includes/post_guard.php';

$nivel  = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 03 – Conversão de Temperatura';
include $base . 'includes/header.php';

$celsius    = (float) ($_POST['celsius'] ?? 0);
$fahrenheit = ($celsius * 9 / 5) + 32;
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 03</span>
        <h2>Conversão de Temperatura</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><strong><?= $celsius ?>°C</strong> equivale a <strong><?= number_format($fahrenheit, 2) ?>°F</strong></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Converter Outro Valor</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
