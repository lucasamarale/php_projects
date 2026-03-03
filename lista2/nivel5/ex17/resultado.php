<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Nível 5 – Estrutura do...while';
$titulo = 'Exercício 17 – Menu Simples';
include $base . 'includes/header.php';

$opcao = (int) ($_POST['opcao'] ?? 0);
$saidas = [];

// Simula o do...while: executa ao menos 1 vez
do {
    switch ($opcao) {
        case 1:
            $saidas[] = '👋 Bem-vindo ao sistema PHP! Obrigado por usar nosso menu.';
            break;
        case 2:
            $saidas[] = '📅 Data e hora atual: <strong>' . date('d/m/Y H:i:s') . '</strong>';
            break;
        case 3:
            $saidas[] = '💡 Curiosidade: PHP significa <strong>PHP: Hypertext Preprocessor</strong> (um acrônimo recursivo)!';
            break;
        case 0:
            $saidas[] = '👋 Saindo do menu... Até mais!';
            break;
        default:
            $saidas[] = '⚠️ Opção inválida. Por favor, escolha entre 0 e 3.';
    }
} while (false); // Em um sistema real, repetiria até $opcao == 0
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 17</span>
        <h2>Menu Simples com <code>do...while</code></h2>
        <p>Opção selecionada: <strong><?= $opcao ?></strong></p>
    </div>

    <div class="result-title">Resultado do Menu</div>
    <div class="result-box">
        <?php foreach ($saidas as $s): ?>
            <span class="result-line"><?= $s ?></span>
        <?php endforeach; ?>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Voltar ao Menu</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
