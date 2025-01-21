<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 013</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <main>
        <?php
            //Capturando os dados do Formulario Retrodimento
            $saque = $_REQUEST['saque'] ?? 0;
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponiveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php
            $resto = $saque;
            //Saque de 100
            $tot100 = floor($resto / 100);
            $resto %= 100;
            //Saque de 50
            $tot50 = floor($resto / 50);
            $resto %= 50;
            //Saque de 10
            $tot10 = floor($resto / 10);
            $resto %= 10;
            //Saque de 5
            $tot5 = floor($resto / 5);
            $resto %= 5;
        ?>
        <h2>Saque de R$<?=$saque?>realizado</h2>
        <p>O caixa eletronico vai entregar as seguintes notas:</p>
        <ul>
            <li><img src="./imagem/100.png" alt="100" class="nota"> x<?=$tot100?></li>
            <li><img src="./imagem/50.png" alt="50" class="nota"> x<?=$tot50?></li>
            <li><img src="./imagem/10.png" alt="10" class="nota"> x<?=$tot10?></li>
            <li><img src="./imagem/5.png" alt="5" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>