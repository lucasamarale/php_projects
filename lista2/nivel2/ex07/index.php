<?php
$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 07 – Par ou Ímpar';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 07</span>
        <h2>Par ou Ímpar</h2>
        <p>Informe um número inteiro e o programa verifica se ele é par ou ímpar usando o operador módulo <code>%</code>.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="numero">Número Inteiro:</label>
            <input type="number" id="numero" name="numero" placeholder="Ex: 7" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Verificar</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
