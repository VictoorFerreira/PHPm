<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas Básicas V1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            //cotação copiada do google
            $cotacao = 6.10;
            //Quanto $$ voce tem?
            $real = $_REQUEST["din"] ?? 0;
            //Equivalencia em dolar
            $dolar = $real / $cotacao;
            //Mostrar o resultado
            //echo "Seus R/S" .number_format($real, 2, ",",!").equivalem a US \S", number_format($dolar,2, ",",".")
            //formatação de moedas com Intercionalidade!
            //Biblioteca intil(Internalization PHP)
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>