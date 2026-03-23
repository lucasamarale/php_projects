<?php
$alunos = [];
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10 || $nota3 < 0 || $nota3 > 10) {
        $erro = "As notas devem estar entre 0 e 10!";
    } else {
        $media = ($nota1 + $nota2 + $nota3) / 3;

        if ($media >= 7) {
            $situacao = "Aprovado";
        } elseif ($media >= 5) {
            $situacao = "Recuperação";
        } else {
            $situacao = "Reprovado";
        }

        $alunos[] = [
            "nome" => $nome,
            "nota1" => $nota1,
            "nota2" => $nota2,
            "nota3" => $nota3,
            "media" => number_format($media, 2),
            "situacao" => $situacao
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Notas dos Alunos</title>
</head>
<body>
    <h2>Registrar Notas</h2>

    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Nota 1: <input type="number" name="nota1" step="0.1" min="0" max="10" required><br><br>
        Nota 2: <input type="number" name="nota2" step="0.1" min="0" max="10" required><br><br>
        Nota 3: <input type="number" name="nota3" step="0.1" min="0" max="10" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php if ($erro): ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>

    <?php if (!empty($alunos)): ?>
        <h2>Resultado</h2>
        <table border="1" cellpadding="8">
            <tr>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Média</th>
                <th>Situação</th>
            </tr>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $aluno["nome"] ?></td>
                <td><?= $aluno["nota1"] ?></td>
                <td><?= $aluno["nota2"] ?></td>
                <td><?= $aluno["nota3"] ?></td>
                <td><?= $aluno["media"] ?></td>
                <td><?= $aluno["situacao"] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
