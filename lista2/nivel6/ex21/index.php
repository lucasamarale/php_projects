<?php
$base  = '../../';
$nivel = 'Nível 6 – foreach com Arrays';
$titulo = 'Exercício 21 – Aprovação de Alunos';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 21</span>
        <h2>Aprovação de Alunos</h2>
        <p>Um array associativo com nomes e notas é percorrido com <code>foreach</code>.
           Alunos com nota <strong>&ge; 7</strong> são aprovados; abaixo disso, reprovados.</p>
    </div>

    <div class="btn-group">
        <a href="resultado.php" class="btn btn-primary">Ver Resultado</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
