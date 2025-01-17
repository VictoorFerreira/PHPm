<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $minimo = 1_380.60;
            $salario = $_GET['sal'] ?? 0;
        ?>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o sálario minimo de R$<?=number_format($minimo, 2, ",", ".")?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;
            print "<p>Quem recebe um sálario de R\$".number_format($salario, 2, ",", "."). " ganha $tot salários minimos + R\$ ".number_format($dif, 2, ",", "."). ".</p>";
        ?>
    </section>
</body>
</html>