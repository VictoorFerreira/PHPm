<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal , 0b = binario , 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num";

        //$v = "Victor";
        //var_dump($v);

        //$num = 3e2; // 3 * 10(2) coerção
        // echo "O valor é $num
        //var_dump($num);
        
        //$num = (real) "950";
        //var_dump($num);

        //$casado = false;
        //var_dump($casado);
        //print "O valor para casado é $casado";

        //$vet = [6, 2, 5, "Victor", 3, false];
        //var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>