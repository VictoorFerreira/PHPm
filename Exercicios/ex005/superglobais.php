<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                setcookie("dia-da-semana", "segunda", time()+3600);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>SuperGlobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>SuperGlobal SESSION</h1>";
                var_dump($_SESSION);

                session_start();
                $_SESSION["teste"] = "Funcionou";

                echo "<h1>Superglobal env</h1>";
                var_dump($_ENV);
                //foreach(getenv() as $c => $v){
                //  echo "<br>$c -> $v";    
                //}
                echo "<h1>Superglobal cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal server<h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal globals<h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>