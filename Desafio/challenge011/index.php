<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $preco = $_REQUEST['preco'] ?? 0;
            $reaj = $_REQUEST['reaj'] ?? 0;
        ?>
        <h1>Reajuste de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto? (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reaj">Qual será o porcentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            $aumento = $preco * $reaj / 100;
            $newPreco = $preco + $aumento;
            print "<p>O produto que custava R$$preco, com $reaj de aumento, vai passar a custar $newPreco, a partir de agora.</p>";
        ?>
    </section>
    <script>
        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>