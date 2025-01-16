<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            //cotação copiada da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            //-$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoracotacao%20desc&$format=json&$select=cotacaoCompra,dataHoracotacao';
            //-$dados = json_decode(file_get_contents($url), true);
            //-$dados = json_decode(file_get_contents($url), true);
            //-$cotacao = $dados["contacaoCompra"];
            //Quanto $$ voce tem?
            $real = $_REQUEST["din"];
            //Equivalencia em dolar
            //-$dolar = $real / $cotacao;
            //Mostrar o resultado
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            //-echo "<p>Seus", numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " .numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>