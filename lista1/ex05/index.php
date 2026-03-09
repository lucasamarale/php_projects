<?php
$base  = '../';
$nivel = 'Exercício 05';
$titulo = 'Exercício 05 – Mini Cadastro com Lista';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 05</span>
        <h2>Mini Sistema de Cadastro com Lista</h2>
        <p>Cadastre uma pessoa e veja a lista com sua situação.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Maria" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="0" max="130" placeholder="Ex: 20" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
