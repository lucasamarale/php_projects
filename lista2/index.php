<?php
$base  = './';
$titulo = 'Exercícios PHP';
include $base . 'includes/header.php';

$grupos = [
    ['titulo' => 'Nível 1 &ndash; Variáveis e Operações Básicas', 'exercicios' => [
        ['num' => '01', 'titulo' => 'Variáveis Básicas',        'href' => 'nivel1/ex01/'],
        ['num' => '02', 'titulo' => 'Operações Aritméticas',    'href' => 'nivel1/ex02/'],
        ['num' => '03', 'titulo' => 'Conversão de Temperatura', 'href' => 'nivel1/ex03/'],
        ['num' => '04', 'titulo' => 'Concatenação de Strings',  'href' => 'nivel1/ex04/'],
    ]],
    ['titulo' => 'Nível 2 &ndash; Estruturas Condicionais', 'exercicios' => [
        ['num' => '05', 'titulo' => 'Verificar Maioridade',       'href' => 'nivel2/ex05/'],
        ['num' => '06', 'titulo' => 'Positivo, Negativo ou Zero', 'href' => 'nivel2/ex06/'],
        ['num' => '07', 'titulo' => 'Par ou Ímpar',               'href' => 'nivel2/ex07/'],
        ['num' => '08', 'titulo' => 'Calculadora Simples',        'href' => 'nivel2/ex08/'],
    ]],
    ['titulo' => 'Nível 3 &ndash; Estrutura de Repetição <code>for</code>', 'exercicios' => [
        ['num' => '09', 'titulo' => 'Contagem de 1 a 10',  'href' => 'nivel3/ex09/'],
        ['num' => '10', 'titulo' => 'Contagem Regressiva', 'href' => 'nivel3/ex10/'],
        ['num' => '11', 'titulo' => 'Tabuada',             'href' => 'nivel3/ex11/'],
        ['num' => '12', 'titulo' => 'Soma de 1 a 100',     'href' => 'nivel3/ex12/'],
    ]],
    ['titulo' => 'Nível 4 &ndash; Estrutura <code>while</code>', 'exercicios' => [
        ['num' => '13', 'titulo' => 'Contagem com while',   'href' => 'nivel4/ex13/'],
        ['num' => '14', 'titulo' => 'Somar até Atingir 100','href' => 'nivel4/ex14/'],
        ['num' => '15', 'titulo' => 'Validação de Senha',   'href' => 'nivel4/ex15/'],
    ]],
    ['titulo' => 'Nível 5 &ndash; Estrutura <code>do...while</code>', 'exercicios' => [
        ['num' => '16', 'titulo' => 'Execução Garantida', 'href' => 'nivel5/ex16/'],
        ['num' => '17', 'titulo' => 'Menu Simples',       'href' => 'nivel5/ex17/'],
    ]],
    ['titulo' => 'Nível 6 &ndash; <code>foreach</code> com Arrays', 'exercicios' => [
        ['num' => '18', 'titulo' => 'Lista de Nomes',         'href' => 'nivel6/ex18/'],
        ['num' => '19', 'titulo' => 'Somar Valores de Array', 'href' => 'nivel6/ex19/'],
        ['num' => '20', 'titulo' => 'Produtos e Preços',      'href' => 'nivel6/ex20/'],
        ['num' => '21', 'titulo' => 'Aprovação de Alunos',    'href' => 'nivel6/ex21/'],
    ]],
    ['titulo' => '&#9889; Desafios Extras &ndash; Misturando Estruturas', 'exercicios' => [
        ['num' => '22', 'titulo' => 'Números Pares de 1 a 50', 'href' => 'desafios/ex22/'],
        ['num' => '23', 'titulo' => 'Contar Vogais',           'href' => 'desafios/ex23/'],
        ['num' => '24', 'titulo' => 'Maior Número do Array',   'href' => 'desafios/ex24/'],
        ['num' => '25', 'titulo' => 'Caixa Eletrônico',        'href' => 'desafios/ex25/'],
    ]],
];
?>

<div class="page-title">
    <h1>&#128196; Lista de Exercícios PHP</h1>
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
