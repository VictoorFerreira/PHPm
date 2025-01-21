<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $anoNasc = $_GET['anoN'] ?? 0;
            $ano = $_GET['ano'] ?? 0;
        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que a ano você nasceu?</label>
            <input type="number" name="anoN" id="anoN" value="<?=$anoNasc?>">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $idade = $ano - $anoNasc;
            print "<p>Quem nasceu em $anoNasc vai ter $idade anos em $ano</p>";
        ?>
    </section>
</body>
</html>