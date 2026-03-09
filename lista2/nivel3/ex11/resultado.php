<?php
$base  = '../../';
include $base . 'includes/post_guard.php';

$nivel  = 'Nível 3 – Estrutura de Repetição for';
$titulo = 'Exercício 11 – Tabuada';
include $base . 'includes/header.php';

$numero = (int) ($_POST['numero'] ?? 1);
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 11</span>
        <h2>Tabuada do <?= $numero ?></h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <span class="result-line">
                <?= $numero ?> × <?= $i ?> = <strong><?= $numero * $i ?></strong>
            </span>
        <?php endfor; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Outra Tabuada</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
