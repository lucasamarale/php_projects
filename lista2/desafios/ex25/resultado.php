<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Desafios Extras – Misturando Estruturas';
$titulo = 'Exercício 25 – Caixa Eletrônico';
include $base . 'includes/header.php';

$saldoInicial = 1500.00;
$saque        = (float) str_replace(',', '.', $_POST['saque'] ?? '0');
$sucesso      = false;
$saldoFinal   = $saldoInicial;
$mensagem     = '';

if ($saque <= 0) {
    $mensagem = '⚠️ Valor de saque inválido. Informe um valor positivo.';
} elseif ($saque > $saldoInicial) {
    $mensagem = '❌ Saldo insuficiente! Seu saldo atual é R$ ' . number_format($saldoInicial, 2, ',', '.') . '.';
} else {
    $saldoFinal = $saldoInicial - $saque;
    $sucesso    = true;
    $mensagem   = '✅ Saque realizado com sucesso!';
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 25 – Desafio</span>
        <h2>Caixa Eletrônico</h2>
    </div>

    <div class="result-title">Extrato da Operação</div>
    <div class="result-box">
        <span class="result-line">💰 Saldo inicial: <strong>R$ <?= number_format($saldoInicial, 2, ',', '.') ?></strong></span>
        <span class="result-line">💸 Valor do saque: <strong>R$ <?= number_format($saque, 2, ',', '.') ?></strong></span>
        <span class="result-line" style="border-top:1px solid #ccc; padding-top:0.5rem; margin-top:0.3rem">
            <?= $mensagem ?>
        </span>
        <?php if ($sucesso): ?>
        <span class="result-line">🏦 Saldo restante: <strong style="color:#2e7d32">R$ <?= number_format($saldoFinal, 2, ',', '.') ?></strong></span>
        <?php endif; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Fazer Outro Saque</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
