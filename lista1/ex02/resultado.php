<?php
$base = '../';

if (!isset($_GET['numero']) || $_GET['numero'] === '') {
    header('Location: index.php');
    exit;
}

$nivel  = 'Exercício 02';
$titulo = 'Exercício 02 – Par ou Ímpar';
include $base . 'includes/header.php';

$numero = (int) $_GET['numero'];

if ($numero % 2 === 0) {
    $paridade = 'Par';
    $icone_p  = '✅';
} else {
    $paridade = 'Ímpar';
    $icone_p  = '🔢';
}

if ($numero > 0) {
    $sinal    = 'Positivo';
    $icone_s  = '📈';
} elseif ($numero < 0) {
    $sinal    = 'Negativo';
    $icone_s  = '📉';
} else {
    $sinal    = 'Zero';
    $icone_s  = '⚖️';
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 02</span>
        <h2>Verificador de Número Par ou Ímpar</h2>
        <p>Número informado: <strong><?= $numero ?></strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><?= $icone_p ?> O número <strong><?= $numero ?></strong> é <strong><?= $paridade ?></strong>.</span>
        <span class="result-line"><?= $icone_s ?> É um número <strong><?= $sinal ?></strong>.</span>
        <span class="result-line" style="font-size:0.85rem; color:#777"><?= $numero ?> % 2 = <?= $numero % 2 ?></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Verificar Outro Número</a>
        <a href="../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
