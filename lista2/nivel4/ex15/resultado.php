<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Nível 4 – Estrutura while';
$titulo = 'Exercício 15 – Validação de Senha';
include $base . 'includes/header.php';

$senhaCorreta  = 'php123';
$senhaDigitada = $_POST['senha'] ?? '';
$tentativas    = [];
$maxTentativas = 3;

// Simula o while verificando tentativas (neste caso, só temos 1 tentativa via POST)
$tentativa = 1;
$acesso    = false;

while ($tentativa <= $maxTentativas) {
    if ($senhaDigitada === $senhaCorreta) {
        $tentativas[] = "Tentativa $tentativa: ✅ Acesso liberado!";
        $acesso = true;
        break;
    } else {
        $tentativas[] = "Tentativa $tentativa: ❌ Senha incorreta.";
        // Em uma aplicação real, pediria nova senha. Aqui simulamos só 1 tentativa real.
        break;
    }
    $tentativa++;
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 15</span>
        <h2>Validação de Senha</h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <?php foreach ($tentativas as $t): ?>
            <span class="result-line"><?= $t ?></span>
        <?php endforeach; ?>
        <?php if ($acesso): ?>
            <span class="result-line" style="color:#2e7d32; font-weight:bold; margin-top:0.5rem;">🔓 Bem-vindo ao sistema!</span>
        <?php else: ?>
            <span class="result-line" style="color:#c62828; font-weight:bold; margin-top:0.5rem;">🔒 Acesso negado. Tente novamente.</span>
        <?php endif; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Tentar Novamente</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
