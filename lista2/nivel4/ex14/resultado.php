<?php
$base  = '../../';
$nivel = 'Nível 4 – Estrutura while';
$titulo = 'Exercício 14 – Somar até Atingir 100';
include $base . 'includes/header.php';

$soma = 0;
$i    = 1;
$passos = [];

while ($soma < 100) {
    $soma += $i;
    $passos[] = ['n' => $i, 'soma' => $soma];
    $i++;
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 14</span>
        <h2>Somar até Atingir 100</h2>
    </div>

    <div class="result-title">Resultado – passo a passo</div>
    <div class="result-box">
        <?php foreach ($passos as $p): ?>
            <span class="result-line">
                Adicionando <strong><?= $p['n'] ?></strong> → Soma acumulada: <strong><?= $p['soma'] ?></strong>
                <?= $p['soma'] >= 100 ? ' ✅ Ultrapassou 100!' : '' ?>
            </span>
        <?php endforeach; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
