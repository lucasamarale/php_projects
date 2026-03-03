<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$base  = '../../';
$nivel = 'Desafios Extras – Misturando Estruturas';
$titulo = 'Exercício 23 – Contar Vogais';
include $base . 'includes/header.php';

$palavra       = mb_strtolower(trim($_POST['palavra'] ?? ''), 'UTF-8');
$palavraExib   = htmlspecialchars($_POST['palavra'] ?? '');
$vogais        = ['a','e','i','o','u','á','é','í','ó','ú','â','ê','î','ô','û','ã','õ','à','è','ì','ò','ù'];
$contagem      = 0;
$detalhes      = [];
$tamanho       = mb_strlen($palavra, 'UTF-8');

for ($i = 0; $i < $tamanho; $i++) {
    $char = mb_substr($palavra, $i, 1, 'UTF-8');
    if (in_array($char, $vogais)) {
        $contagem++;
        $detalhes[] = ['pos' => ($i + 1), 'char' => $char, 'tipo' => 'vogal'];
    } else {
        $detalhes[] = ['pos' => ($i + 1), 'char' => $char, 'tipo' => 'consoante'];
    }
}
?>

<div class="card">
    <div class="ex-header">
        <span class="ex-badge">Exercício 23 – Desafio</span>
        <h2>Contar Vogais</h2>
        <p>Palavra: <strong><?= $palavraExib ?></strong></p>
    </div>

    <div class="result-title">Resultado</div>
    <div class="result-box">
        <span class="result-line">🔡 A palavra <strong>"<?= $palavraExib ?>"</strong> possui <strong><?= $contagem ?> vogal(is)</strong>.</span>
        <span class="result-line" style="margin-top:0.5rem; font-size:0.85rem; color:#555">
            <?php foreach ($detalhes as $d): ?>
                <span style="
                    display:inline-block;
                    padding:2px 6px;
                    border-radius:4px;
                    margin:2px;
                    background:<?= $d['tipo'] === 'vogal' ? '#d0f0d0' : '#f0f0f0' ?>;
                    color:<?= $d['tipo'] === 'vogal' ? '#2e7d32' : '#555' ?>;
                    font-weight:<?= $d['tipo'] === 'vogal' ? 'bold' : 'normal' ?>
                "><?= $d['char'] ?></span>
            <?php endforeach; ?>
        </span>
        <span class="result-line" style="font-size:0.8rem; color:#888; margin-top:0.3rem">Verde = vogal</span>
    </div>

    <div class="btn-group">
        <a href="index.php" class="btn btn-primary">Analisar Outra Palavra</a>
        <a href="../../" class="btn btn-secondary">Voltar ao Início</a>
    </div>
</div>

<?php include $base . 'includes/footer.php'; ?>
