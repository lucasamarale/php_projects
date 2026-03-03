<?php
$base  = '../../';
$nivel = 'Nível 4 – Estrutura while';
$titulo = 'Exercício 13 – Contagem com while';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 13</span>
        <h2>Contagem com <code>while</code></h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php
        $i = 1;
        while ($i <= 10):
        ?>
            <span class="result-line"><?= $i ?></span>
        <?php
            $i++;
        endwhile;
        ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
