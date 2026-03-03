<?php
$base  = '../../';
$nivel = 'Desafios Extras – Misturando Estruturas';
$titulo = 'Exercício 25 – Caixa Eletrônico';
include $base . 'includes/header.php';

$saldo = 1500.00;
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 25 – Desafio</span>
        <h2>Caixa Eletrônico</h2>
        <p>Simula um caixa eletrônico com saldo inicial de <strong>R$ <?= number_format($saldo, 2, ',', '.') ?></strong>.
           Informe o valor do saque e o programa verifica se há saldo suficiente.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="saque">Valor do Saque (R$):</label>
            <input type="number" id="saque" name="saque" min="0.01" step="0.01" placeholder="Ex: 200.00" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Realizar Saque</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
