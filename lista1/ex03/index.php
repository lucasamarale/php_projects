<?php
$base  = '../';
$nivel = 'Exercício 03';
$titulo = 'Exercício 03 – Tabuada Dinâmica';
include $base . 'includes/header.php';
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 03</span>
        <h2>Tabuada Dinâmica</h2>
        <p>Informe um número e veja sua tabuada de 1 a 10.</p>
    </div>

    <form action="resultado.php" method="post">
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" placeholder="Ex: 5" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Gerar Tabuada</button>
            <a href="../" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </form>
</div>

<?php include $base . 'includes/footer.php'; ?>
