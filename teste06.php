<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>
<body>
    <h1>Foreach</h1>
    Números de 1 a 10:
    <?php
    $n = array(2, 4, 6, 8, 10);
    foreach ($n as $i){
        echo $i.", ";
    }
    ?>
</body>
</html>