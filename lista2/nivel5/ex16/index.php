<?php
$base  = '../../';
$nivel = 'Nível 5 – Estrutura do...while';
$titulo = 'Exercício 16 – Execução Garantida';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 16</span>
        <h2>Execução Garantida com <code>do...while</code></h2>
        <p>O <code>do...while</code> executa o bloco de código <strong>pelo menos uma vez</strong> antes de verificar a condição.
           Neste exemplo, a contagem começa em 1 e avança enquanto o número for menor ou igual a 5.</p>
    </div>

    <div class="btn-group">
        <a href="resultado.php" class="btn btn-primary">Ver Resultado</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
