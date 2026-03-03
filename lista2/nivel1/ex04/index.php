<?php
$base  = '../../';
$nivel = 'Nível 1 – Variáveis e Operações Básicas';
$titulo = 'Exercício 04 – Concatenação de Strings';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 04</span>
        <h2>Concatenação de Strings</h2>
        <p>Informe um nome e um sobrenome. O PHP irá concatenar as duas strings e exibir o nome completo.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Maria" required>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" placeholder="Ex: Silva" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Ver Resultado</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
