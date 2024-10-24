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
        <h3>Digite um número</h3>
        <input for="text" name="num"></input>
        <button type="submit">Número</button>

    </form>
    <br>
    <div align="center">

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $num = $_POST['num'];

        echo 'Seu número é: ';
        echo $num;
    }

    ?>
</div>
</body>
</html>