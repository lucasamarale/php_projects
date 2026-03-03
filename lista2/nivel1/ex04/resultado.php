<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 04 – Concatenação de Strings';
include $base . 'includes/header.php';

$nome      = htmlspecialchars(trim($_POST['nome']      ?? ''));
$sobrenome = htmlspecialchars(trim($_POST['sobrenome'] ?? ''));
$completo  = $nome . ' ' . $sobrenome;
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 04</span>
        <h2>Concatenação de Strings</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><strong>Nome:</strong> <?= $nome ?></span>
        <span class="result-line"><strong>Sobrenome:</strong> <?= $sobrenome ?></span>
        <span class="result-line"><strong>Nome Completo:</strong> <?= $completo ?></span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Tentar Novamente</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
