<?php
$base  = '../../';
$nivel = 'Nível 6 – foreach com Arrays';
$titulo = 'Exercício 20 – Produtos e Preços';
include $base . 'includes/header.php';

$produtos = [
    'Notebook'    => 3500.00,
    'Mouse'       => 89.90,
    'Teclado'     => 199.90,
    'Monitor'     => 1299.00,
    'Headset'     => 349.50,
];

$total = array_sum($produtos);
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 20</span>
        <h2>Produtos e Preços</h2>
    </div>

    <div class="result-title">Resultado</div>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto => $preco): ?>
            <tr>
                <td><?= $produto ?></td>
                <td>R$ <?= number_format($preco, 2, ',', '.') ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></td>
            </tr>
        </tbody>
    </table>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
