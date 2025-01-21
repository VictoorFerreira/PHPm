<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $total = $_REQUEST['seg'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php
            $sobra = $total;
            //total de Semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            //Total de Dias
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            //Total de Horas
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            //Total de Minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //Total de Segundos
            $segundos = $sobra;
        ?>
        <p>Analisando o valor que você digitou, <?=$total?> segundos equivalem a um total de:</p>
        <ul>
            <li>[<?=$semana?>] Semanas</li>
            <li>[<?=$dia?>] Dias</li>
            <li>[<?=$hora?>] Horas</li>
            <li>[<?=$minuto?>] Minutos</li>
            <li>[<?=$segundos?>] Segundos</li>
        </ul>
    </section>
</body>
</html>