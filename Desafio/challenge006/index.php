<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dessafio PHP</title>
</head>
<body>
    <?php
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action=" " method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min value="<?=$dividendo?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Esturutura da Divisão</h2>
        <?php
            //calculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>