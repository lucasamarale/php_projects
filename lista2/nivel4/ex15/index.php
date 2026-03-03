<?php
$base  = '../../';
$nivel = 'Nível 4 – Estrutura while';
$titulo = 'Exercício 15 – Validação de Senha';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 15</span>
        <h2>Validação de Senha</h2>
        <p>Digite uma senha e o programa verifica se está correta. A senha certa é <strong>php123</strong>.
           O <code>while</code> simula tentativas de acesso.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite a senha..." required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Verificar Senha</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
