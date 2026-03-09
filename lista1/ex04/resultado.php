<?php
$base = '../';
include $base . 'includes/post_guard.php';

$nivel  = 'Exercício 04';
$titulo = 'Exercício 04 – Sistema de Notas';
include $base . 'includes/header.php';

$nome  = htmlspecialchars(trim($_POST['nome'] ?? ''));
$nota1 = (float) ($_POST['nota1'] ?? 0);
$nota2 = (float) ($_POST['nota2'] ?? 0);
$nota3 = (float) ($_POST['nota3'] ?? 0);
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    $situacao = 'Aprovado';
    $classe   = 'alert-success';
    $icone    = '✅';
} elseif ($media >= 5) {
    $situacao = 'Recuperação';
    $classe   = 'alert-warning';
    $icone    = '⚠️';
} else {
    $situacao = 'Reprovado';
    $classe   = 'alert-danger';
    $icone    = '❌';
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 04</span>
        <h2>Sistema de Notas</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line"><strong>Aluno:</strong> <?= $nome ?></span>
        <span class="result-line"><strong>Nota 1:</strong> <?= number_format($nota1, 1) ?></span>
        <span class="result-line"><strong>Nota 2:</strong> <?= number_format($nota2, 1) ?></span>
        <span class="result-line"><strong>Nota 3:</strong> <?= number_format($nota3, 1) ?></span>
        <span class="result-line"><strong>Média:</strong> <?= number_format($media, 2) ?></span>
    </div>

    <div class="alert <?= $classe ?>" style="margin-top:1rem">
        <?= $icone ?> Situação: <strong><?= $situacao ?></strong>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Verificar Outro Aluno</a>
        <a href="../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
