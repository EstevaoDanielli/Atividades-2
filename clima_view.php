<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previsão do Tempo</title>
</head>

<body>
        <form method="get" action="clima.php">
        <input type="text" name="campo_cidade"> <br />
        <input type="submit">

    </form>

    <h2><?= $nome ?></h2>
    <p> Temperatura: <?= $temperatura ?></p>
    <p> Sensação: <?= $sensacao ?></p>
    <p> Umidade: <?= $umidade ?></p>
    <p> Velocidade do Vento: <?= $velocidade ?></p>
    
</body>
</html>
