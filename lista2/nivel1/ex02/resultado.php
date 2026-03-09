<?php
$base  = '../../';
include $base . 'includes/post_guard.php';

$nivel  = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 02 – Operações Aritméticas';
include $base . 'includes/header.php';

$a = (float) ($_POST['a'] ?? 0);
$b = (float) ($_POST['b'] ?? 0);
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 02</span>
        <h2>Operações Aritméticas</h2>
        <p>A = <strong><?= $a ?></strong> &nbsp;|&nbsp; B = <strong><?= $b ?></strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><strong>Soma:</strong> <?= $a ?> + <?= $b ?> = <?= ($a + $b) ?></span>
        <span class="result-line"><strong>Subtração:</strong> <?= $a ?> - <?= $b ?> = <?= ($a - $b) ?></span>
        <span class="result-line"><strong>Multiplicação:</strong> <?= $a ?> × <?= $b ?> = <?= ($a * $b) ?></span>
        <span class="result-line"><strong>Divisão:</strong> <?= $a ?> ÷ <?= $b ?> =
            <?php if ($b != 0): ?>
                <?= ($a / $b) ?>
            <?php else: ?>
                <span style="color:#c62828">Erro: divisão por zero!</span>
            <?php endif; ?>
        </span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Tentar Novamente</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
