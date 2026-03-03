<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 05 – Verificar Maioridade';
include $base . 'includes/header.php';

$idade = (int) ($_POST['idade'] ?? 0);

if ($idade >= 18) {
    $resultado = 'Maior de idade';
    $classe    = 'alert-success';
} else {
    $resultado = 'Menor de idade';
    $classe    = 'alert-danger';
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 05</span>
        <h2>Verificar Maioridade</h2>
        <p>Idade informada: <strong><?= $idade ?> anos</strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line">
            <?php if ($idade >= 18): ?>
                ✅ <strong><?= $resultado ?></strong> (<?= $idade ?> ≥ 18)
            <?php else: ?>
                ❌ <strong><?= $resultado ?></strong> (<?= $idade ?> &lt; 18)
            <?php endif; ?>
        </span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Verificar Outra Idade</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
