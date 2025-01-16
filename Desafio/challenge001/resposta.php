<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $n = $_REQUEST["num"];
                $a = $n - 1;
                $s = $n + 1;
                echo "<br>O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu <em>antecessor</em> é $a";
                echo "<br>O Seu <em>sucessor</em> é $s";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>