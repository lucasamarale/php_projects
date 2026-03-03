<?php
$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 06 – Positivo, Negativo ou Zero';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 06</span>
        <h2>Positivo, Negativo ou Zero</h2>
        <p>Informe um número e o programa identifica se ele é positivo, negativo ou zero.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" step="any" placeholder="Ex: -5" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Verificar</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
