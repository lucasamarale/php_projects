<?php
$base = '../';
include $base . 'includes/post_guard.php';

$nivel  = 'Exercício 01';
$titulo = 'Exercício 01 – Calculadora Simples';
include $base . 'includes/header.php';

$a       = (float) ($_POST['a'] ?? 0);
$b       = (float) ($_POST['b'] ?? 0);
$operacao = $_POST['operacao'] ?? '+';

$erro = false;

switch ($operacao) {
    case '+': $resultado = $a + $b; $simbolo = '+';  break;
    case '-': $resultado = $a - $b; $simbolo = '−';  break;
    case '*': $resultado = $a * $b; $simbolo = '×';  break;
    case '/':
        $simbolo = '÷';
        if ($b == 0) {
            $erro = true;
        } else {
            $resultado = $a / $b;
        }
        break;
    default:
        $erro = true;
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 01</span>
        <h2>Calculadora Simples</h2>
        <p>A = <strong><?= $a ?></strong> &nbsp;|&nbsp; B = <strong><?= $b ?></strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php if ($erro): ?>
            <span class="result-line" style="color:#c62828">❌ Erro: divisão por zero não é permitida!</span>
        <?php else: ?>
            <span class="result-line">
                <strong><?= $a ?> <?= $simbolo ?> <?= $b ?> = <?= $resultado ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Calcular Novamente</a>
        <a href="../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
