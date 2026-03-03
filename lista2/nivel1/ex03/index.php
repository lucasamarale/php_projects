<?php
$base  = '../../';
$nivel = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 03 – Conversão de Temperatura';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 03</span>
        <h2>Conversão de Temperatura</h2>
        <p>Informe uma temperatura em Celsius e veja o equivalente em Fahrenheit.<br>
           Fórmula: <code>°F = (°C × 9/5) + 32</code></p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="celsius">Temperatura em °C:</label>
            <input type="number" id="celsius" name="celsius" step="any" placeholder="Ex: 30" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Converter</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
