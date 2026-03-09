<?php
$base = '../';
include $base . 'includes/post_guard.php';

$nivel  = 'Exercício 05';
$titulo = 'Exercício 05 – Mini Cadastro com Lista';
include $base . 'includes/header.php';

$nome  = htmlspecialchars(trim($_POST['nome'] ?? ''));
$idade = (int) ($_POST['idade'] ?? 0);

// Array com pessoas cadastradas (exemplo fixo + novo cadastro)
$pessoas = [
    ['nome' => 'Ana Lima',     'idade' => 25],
    ['nome' => 'Carlos Souza', 'idade' => 16],
    ['nome' => 'Beatriz Melo', 'idade' => 30],
    ['nome' => $nome,          'idade' => $idade],
];
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 05</span>
        <h2>Mini Sistema de Cadastro com Lista</h2>
        <p>Pessoa cadastrada: <strong><?= $nome ?></strong>, <?= $idade ?> anos.</p>
    </div>

    <div class="result-title">Lista de Pessoas</div>
    <div class="result-box" style="padding:0">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $p): ?>
                <tr>
                    <td><?= $p['nome'] ?></td>
                    <td><?= $p['idade'] ?></td>
                    <td>
                        <?php if ($p['idade'] >= 18): ?>
                            <span class="badge badge-success">Maior de Idade</span>
                        <?php else: ?>
                            <span class="badge badge-danger">Menor de Idade</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Cadastrar Outra Pessoa</a>
        <a href="../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
