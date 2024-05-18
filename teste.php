<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "jullia";
        echo gettype($nome);

        define('SAUDACAO', 'hello <br>');
        echo SAUDACAO;

        const TESTE = 10;
        echo TESTE;
    ?>
</body>
</html>