<?php
$base  = '../';
$nivel = 'Exercício 01';
$titulo = 'Exercício 01 – Calculadora Simples';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 01</span>
        <h2>Calculadora Simples</h2>
        <p>Informe dois números e escolha a operação para ver o resultado.</p>
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
        <div class="form-group">
            <label for="operacao">Operação:</label>
            <select id="operacao" name="operacao">
                <option value="+">Soma (+)</option>
                <option value="-">Subtração (−)</option>
                <option value="*">Multiplicação (×)</option>
                <option value="/">Divisão (÷)</option>
            </select>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Calcular</button>
            <a href="../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
