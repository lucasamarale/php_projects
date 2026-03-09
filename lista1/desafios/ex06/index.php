<?php
$base  = '../../';
$nivel = 'Desafio Extra';
$titulo = 'Exercício 06 – Cadastro + Contagem de Adultos';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">&#9889; Desafio Extra</span>
        <h2>Cadastro + Contagem de Adultos</h2>
        <p>Cadastre uma pessoa. Além da tabela, o sistema conta quantos são maiores de idade.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: João" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="0" max="130" placeholder="Ex: 17" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
