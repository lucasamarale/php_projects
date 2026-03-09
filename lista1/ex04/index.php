<?php
$base  = '../';
$nivel = 'Exercício 04';
$titulo = 'Exercício 04 – Sistema de Notas';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 04</span>
        <h2>Sistema de Notas</h2>
        <p>Informe o nome do aluno e três notas para calcular a média e a situação.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="nome">Nome do Aluno:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: João Silva" required>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="nota1">Nota 1:</label>
                <input type="number" id="nota1" name="nota1" min="0" max="10" step="0.1" placeholder="0 – 10" required>
            </div>
            <div class="form-group">
                <label for="nota2">Nota 2:</label>
                <input type="number" id="nota2" name="nota2" min="0" max="10" step="0.1" placeholder="0 – 10" required>
            </div>
            <div class="form-group">
                <label for="nota3">Nota 3:</label>
                <input type="number" id="nota3" name="nota3" min="0" max="10" step="0.1" placeholder="0 – 10" required>
            </div>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Ver Resultado</button>
            <a href="../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
