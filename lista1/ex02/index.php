<?php
$base  = '../';
$nivel = 'Exercício 02';
$titulo = 'Exercício 02 – Par ou Ímpar';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 02</span>
        <h2>Verificador de Número Par ou Ímpar</h2>
        <p>Digite um número e descubra se é par ou ímpar, e se é positivo, negativo ou zero.</p>
    </div>

    <form action="resultado.php" method="get">
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" placeholder="Ex: 7" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Verificar</button>
            <a href="../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
