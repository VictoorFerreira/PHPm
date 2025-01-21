<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $valor1 = $_GET['v1'] ?? 0;
            $peso1 = $_GET['p1'] ?? 0;
            $valor2 = $_GET['v2'] ?? 0;
            $peso2 = $_GET['p2'] ?? 0;
        ?>
        <h1>Médias Aritimedicas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
            <label for="valor2">2º Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular Média">
        </form>
    </main>

    <section>
        <?php
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Calculo das Médias</h2>
        <ul>
            <p>Analisando os valores <?=$valor1?> e <?=$valor2?></p>
            <p>A média aritmedica simples entre os valores é <?=$ma?></p>
            <p>A média aritmedica ponderada com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$mp?></p>
        </ul>
    </section>
</body>
</html>