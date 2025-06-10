<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de controle</title>
</head>
<body>
    <h1>while</h1>
    Números pares até dez:
    <?php
    $i = 2;
    while ($i <= 10){
        echo $i.", ";
        $i = $i + 2;
    }
    ?>
</body>
</html>