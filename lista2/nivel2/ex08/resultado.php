<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 08 – Calculadora Simples';
include $base . 'includes/header.php';

$x        = (float) ($_POST['x']        ?? 0);
$y        = (float) ($_POST['y']        ?? 0);
$operacao = $_POST['operacao'] ?? '+';

$erro = false;

if ($operacao == '+') {
    $resultado = $x + $y;
    $simbolo   = '+';
} elseif ($operacao == '-') {
    $resultado = $x - $y;
    $simbolo   = '−';
} elseif ($operacao == '*') {
    $resultado = $x * $y;
    $simbolo   = '×';
} elseif ($operacao == '/') {
    $simbolo = '÷';
    if ($y == 0) {
        $erro = true;
    } else {
        $resultado = $x / $y;
    }
} else {
    $erro = true;
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 08</span>
        <h2>Calculadora Simples</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php if ($erro): ?>
            <span class="result-line" style="color:#c62828">❌ Erro: divisão por zero não é permitida!</span>
        <?php else: ?>
            <span class="result-line">
                <strong><?= $x ?> <?= $simbolo ?> <?= $y ?> = <?= $resultado ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Calcular Novamente</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
