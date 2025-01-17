<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $num = $_GET['num'] ?? 0;
        ?>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $rQua = sqrt($num);
            $rCub = pow($num,1/3);
            print "<p>A analisando o número $num, temos</p>";
            print "<p>A sua raiz quadradado é $rQua</p>";
            print "<p>A sua raiz cubica é $rCub</p>";
        ?>
    </section>
</body>
</html>