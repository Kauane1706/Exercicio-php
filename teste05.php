<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>
<body>
    <h1>Do While</h1>
    Números ímpares até dez:
    <?php
    $i = 2;
    do{
        echo $i.", ";
        $i = $i + 2;
    }  while ($i <= 10);
    ?>
</body>
</html>