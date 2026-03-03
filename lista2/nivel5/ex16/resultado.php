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
    </div>

    <div class="result-title">Resultado – contagem de 1 a 5</div>
    <div class="result-box">
        <?php
        $i = 1;
        do {
            echo '<span class="result-line">Executando... número atual: <strong>' . $i . '</strong></span>';
            $i++;
        } while ($i <= 5);
        echo '<span class="result-line" style="margin-top:0.5rem">✅ Laço concluído! O bloco executou <strong>5 vezes</strong>.</span>';
        ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Exercício</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
