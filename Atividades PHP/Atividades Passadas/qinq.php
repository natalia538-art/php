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
        <h3>Digite o valor do produto</h3>
        <input for="text" name="valor"></input>
        <br><p> </p> <br>
        <button type="submit">Calcular nota final</button>

    </form> <br>
    <div align="center">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $valor = $_POST['valor'];

        echo 'O valor acrecido é:  ';
        $desconto = $valor + $valor * .16;
        echo $nota_final;

    }

    ?>
</div>
</body>
</html>