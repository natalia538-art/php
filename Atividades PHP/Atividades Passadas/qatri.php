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
        <h3>Digite as notas do aluno</h3>
        <p>1º nota:</p>
        <input for="text" name="nota1"></input>
        <p>2º nota:</p>
        <input for="text" name="nota2"></input>
        <p>3º nota:</p>
        <input for="text" name="nota3"></input>
        <br><p> </p> <br>
        <button type="submit">Calcular nota final</button>

    </form> <br>
    <div align="center">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        echo 'A nota final é:  ';
        $nota_final = $nota1*.2 + $nota2*.3 + $nota3*.5;
        echo $nota_final;
    }

    ?>
</div>
</body>
</html>