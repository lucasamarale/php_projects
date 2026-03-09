<?php
$base = '../';
include $base . 'includes/post_guard.php';

$nivel  = 'Exercício 03';
$titulo = 'Exercício 03 – Tabuada Dinâmica';
include $base . 'includes/header.php';

$numero = (int) ($_POST['numero'] ?? 1);
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 03</span>
        <h2>Tabuada do <?= $numero ?></h2>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <table>
            <thead>
                <tr>
                    <th>Operação</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td><?= $numero ?> × <?= $i ?></td>
                    <td><strong><?= $numero * $i ?></strong></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Outra Tabuada</a>
        <a href="../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
