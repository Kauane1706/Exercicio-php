<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com PHP</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date('d/m/Y');
    $agora = date('H:i:s');
    $hora = date('H');
    if ($hora < 6 or $hora > 18){
        echo "<img src= lua.png>";
    } else {
        echo "<img src= sol.png>";
    }
    echo "Hoje é dia". $hoje. " e agora são". $agora. " horas.";
    ?>
</body>
</html>