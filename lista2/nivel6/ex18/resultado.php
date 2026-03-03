<?php
$base  = '../../';
$nivel = 'Nível 6 – foreach com Arrays';
$titulo = 'Exercício 18 – Lista de Nomes';
include $base . 'includes/header.php';

$nomes = ['Ana', 'Bruno', 'Carla', 'Diego', 'Eduarda'];
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 18</span>
        <h2>Lista de Nomes</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php $posicao = 1; foreach ($nomes as $nome): ?>
            <span class="result-line"><?= $posicao++ ?>. <?= $nome ?></span>
        <?php endforeach; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
