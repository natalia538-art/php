<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form method="post" align="center">
        <h3>Digite um valor</h3>
        <input for="text" name="valor"></input>
        <button type="submit">Desconto de 27%</button>

    </form> <br>
    <div align="center">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $valor = $_POST['valor'];

        echo 'Seu valor com 27% de desconto é: ';
        $desconto = $valor - $valor * .27;
        echo $desconto;
    }

    ?>
</div>
</body>
</html>