<?php
$base  = '../../';
$nivel = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 01 – Variáveis Básicas';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 01</span>
        <h2>Variáveis Básicas</h2>
        <p>Crie variáveis para armazenar um nome, uma idade e uma altura, depois exiba os valores na tela.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: João" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="0" max="130" placeholder="Ex: 20" required>
        </div>
        <div class="form-group">
            <label for="altura">Altura (m):</label>
            <input type="text" id="altura" name="altura" placeholder="Ex: 1.75" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Ver Resultado</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
