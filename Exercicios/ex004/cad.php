<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
        <main>
            <?php
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
                echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site!";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>
    </header>
</body>
</html>