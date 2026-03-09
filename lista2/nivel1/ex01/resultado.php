<?php
$base  = '../../';
include $base . 'includes/post_guard.php';

$nivel  = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 01 – Variáveis Básicas';
include $base . 'includes/header.php';

$nome   = htmlspecialchars(trim($_POST['nome']   ?? ''));
$idade  = (int) ($_POST['idade']  ?? 0);
$altura = (float) str_replace(',', '.', $_POST['altura'] ?? '0');
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 01</span>
        <h2>Variáveis Básicas</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><strong>Nome:</strong> <?= $nome ?></span>
        <span class="result-line"><strong>Idade:</strong> <?= $idade ?></span>
        <span class="result-line"><strong>Altura:</strong> <?= number_format($altura, 2, '.', '') ?> m</span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Tentar Novamente</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
