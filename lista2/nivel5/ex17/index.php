<?php
$base  = '../../';
$nivel = 'Nível 5 – Estrutura do...while';
$titulo = 'Exercício 17 – Menu Simples';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 17</span>
        <h2>Menu Simples com <code>do...while</code></h2>
        <p>Simula um menu interativo onde o usuário escolhe uma opção. O <code>do...while</code>
           garante que o menu seja exibido ao menos uma vez e continua enquanto o usuário não sair.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="opcao">Escolha uma opção do menu:</label>
            <select id="opcao" name="opcao">
                <option value="1">1 – Ver mensagem de boas-vindas</option>
                <option value="2">2 – Ver data e hora atual</option>
                <option value="3">3 – Ver uma curiosidade PHP</option>
                <option value="0">0 – Sair do menu</option>
            </select>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Confirmar Opção</button>
            <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
