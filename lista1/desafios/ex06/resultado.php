<?php
$base = '../../';
include $base . 'includes/post_guard.php';

$nivel  = 'Desafio Extra';
$titulo = 'Exercício 06 – Cadastro + Contagem de Adultos';
include $base . 'includes/header.php';

$nome  = htmlspecialchars(trim($_POST['nome'] ?? ''));
$idade = (int) ($_POST['idade'] ?? 0);

$pessoas = [
    ['nome' => 'Ana Lima',     'idade' => 25],
    ['nome' => 'Carlos Souza', 'idade' => 16],
    ['nome' => 'Beatriz Melo', 'idade' => 30],
    ['nome' => 'Pedro Alves',  'idade' => 14],
    ['nome' => $nome,          'idade' => $idade],
];

$totalAdultos = 0;
foreach ($pessoas as $p) {
    if ($p['idade'] >= 18) {
        $totalAdultos++;
    }
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">&#9889; Desafio Extra</span>
        <h2>Cadastro + Contagem de Adultos</h2>
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

    <div class="alert alert-success" style="margin-top:1rem">
        👥 Total de pessoas: <strong><?= count($pessoas) ?></strong> &nbsp;|&nbsp;
        ✅ Maiores de idade: <strong><?= $totalAdultos ?></strong> &nbsp;|&nbsp;
        ❌ Menores de idade: <strong><?= count($pessoas) - $totalAdultos ?></strong>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Cadastrar Outra Pessoa</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
