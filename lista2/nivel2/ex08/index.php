<?php
$base  = '../../';
$nivel = 'Nível 2 – Estruturas Condicionais';
$titulo = 'Exercício 08 – Calculadora Simples';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 08</span>
        <h2>Calculadora Simples</h2>
        <p>Informe dois números e escolha a operação. O programa usa <code>if/elseif</code> para calcular o resultado.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-row">
            <div class="form-group">
                <label for="x">Número X:</label>
                <input type="number" id="x" name="x" step="any" placeholder="Ex: 15" required>
            </div>
            <div class="form-group">
                <label for="y">Número Y:</label>
                <input type="number" id="y" name="y" step="any" placeholder="Ex: 3" required>
            </div>
        </div>
        <div class="form-group">
            <label for="operacao">Operação:</label>
            <select id="operacao" name="operacao">
                <option value="+">+ Adição</option>
                <option value="-">− Subtração</option>
                <option value="*" selected>× Multiplicação</option>
                <option value="/">÷ Divisão</option>
            </select>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Calcular</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
