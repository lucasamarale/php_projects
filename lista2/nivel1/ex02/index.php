<?php
$base  = '../../';
$nivel = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 02 – Operações Aritméticas';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 02</span>
        <h2>Operações Aritméticas</h2>
        <p>Informe dois números e veja o resultado das quatro operações: soma, subtração, multiplicação e divisão.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-row">
            <div class="form-group">
                <label for="a">Número A:</label>
                <input type="number" id="a" name="a" step="any" placeholder="Ex: 10" required>
            </div>
            <div class="form-group">
                <label for="b">Número B:</label>
                <input type="number" id="b" name="b" step="any" placeholder="Ex: 4" required>
            </div>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Ver Resultado</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
