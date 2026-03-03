<?php
$base  = '../../';
$nivel = 'Desafios Extras – Misturando Estruturas';
$titulo = 'Exercício 23 – Contar Vogais';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 23 – Desafio</span>
        <h2>Contar Vogais em uma Palavra</h2>
        <p>Percorre cada caractere de uma palavra com um laço <code>for</code> e conta quantas vogais existem usando <code>if</code>.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="palavra">Palavra:</label>
            <input type="text" id="palavra" name="palavra" placeholder="Ex: programação" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Contar Vogais</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
