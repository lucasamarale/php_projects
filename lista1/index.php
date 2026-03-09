<?php
$base  = './';
$titulo = 'Lista 1 – Exercícios PHP';
include $base . 'includes/header.php';

$grupos = [
    ['titulo' => 'Exercícios', 'exercicios' => [
        ['num' => '01', 'titulo' => 'Calculadora Simples',            'href' => 'ex01/'],
        ['num' => '02', 'titulo' => 'Par ou Ímpar',                   'href' => 'ex02/'],
        ['num' => '03', 'titulo' => 'Tabuada Dinâmica',               'href' => 'ex03/'],
        ['num' => '04', 'titulo' => 'Sistema de Notas',               'href' => 'ex04/'],
        ['num' => '05', 'titulo' => 'Mini Cadastro com Lista',        'href' => 'ex05/'],
    ]],
    ['titulo' => '&#9889; Desafio Extra', 'exercicios' => [
        ['num' => '06', 'titulo' => 'Cadastro + Contagem de Adultos', 'href' => 'desafios/ex06/'],
    ]],
];
?>

<div class="page-title">
    <h1>&#128196; Lista 1 – Exercícios PHP</h1>
    <p>Clique em um exercício para ver a descrição e o resultado.</p>
</div>

<?php foreach ($grupos as $grupo): ?>
<div class="nivel-section">
    <div class="nivel-title"><?= $grupo['titulo'] ?></div>
    <div class="ex-grid">
        <?php foreach ($grupo['exercicios'] as $ex): ?>
        <a class="ex-card" href="<?= $ex['href'] ?>">
            <div class="num">Exercício <?= $ex['num'] ?></div>
            <h3><?= $ex['titulo'] ?></h3>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<?php endforeach; ?>

<?php include $base . 'includes/footer.php'; ?>
