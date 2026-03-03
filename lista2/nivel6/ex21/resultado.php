<?php
$base  = '../../';
$nivel = 'Nível 6 – foreach com Arrays';
$titulo = 'Exercício 21 – Aprovação de Alunos';
include $base . 'includes/header.php';

$alunos = [
    'Ana'     => 9.5,
    'Bruno'   => 5.0,
    'Carla'   => 7.0,
    'Diego'   => 3.5,
    'Eduarda' => 8.2,
];
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 21</span>
        <h2>Aprovação de Alunos</h2>
        <p>Nota mínima para aprovação: <strong>7.0</strong></p>
    </div>

    <div class="result-title">Resultado</div>

    <table>
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Nota</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno => $nota): ?>
            <tr>
                <td><?= $aluno ?></td>
                <td><?= number_format($nota, 1, ',', '') ?></td>
                <td>
                    <?php if ($nota >= 7): ?>
                        <span class="badge badge-success">✅ Aprovado</span>
                    <?php else: ?>
                        <span class="badge badge-danger">❌ Reprovado</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
