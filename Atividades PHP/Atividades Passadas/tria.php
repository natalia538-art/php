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
        <h3>Digite as medidas do trapézio</h3>
        <p>Altura (m):</p>
        <input for="text" name="altura"></input>
        <p>Base maior (m):</p>
        <input for="text" name="bezão"></input>
        <p>Base menor (m):</p>
        <input for="text" name="bezinho"></input>
        <br><p> </p> <br>
        <button type="submit">Calcular área</button>

    </form> <br>
    <div align="center">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $h = $_POST['altura'];
        $B = $_POST['bezão'];
        $b = $_POST['bezinho'];

        echo 'Sua área é igua a:  ';
        $area = ($B+$b) * $h /2;
        echo $area;
        echo'm²';
    }

    ?>
</div>
</body>
</html>