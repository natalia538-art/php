<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body align="center">

<?php

include('../quota.php');

$login = $_GET['editar'];
$sql = "SELECT * FROM person WHERE login = '$login';";

$result = $conn->query($sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>

<div class="back">

    <form name="editar" method="post" action="form_editar_usuario.php" align="center">
        
    <h3>Nome</h3>
    <input type="text" name="nome" value="<?php echo $row['nome'] ?>">
    <br><br>
    <h3>Sobrenome </h3>
    <input type="text" name="sobrenome" value="<?php echo $row['sobrenome'] ?>">
    <br><br>
    <h3>CPF </h3>
    <input type="number" name="cpf" value="<?php echo $row['cpf'] ?>">
    <br><br>
    <h3>Email </h3>
    <input type="text" name="email" value="<?php echo $row['email'] ?>">
    <br><br>
    <h3>Telefone </h3>
    <input type="text" name="telefone" value="<?php echo $row['telefone'] ?>">
    <br><br>
    <h3>Login </h3>
    <input type="text" name="login" value="<?php echo $row['login'] ?>">
    <br><br>
    <h3>Senha </h3>
    <input type="text" name="senha" value="<?php echo $row['senha'] ?>">
    <br><br>

    <button type="submit" name="cadastro">Enviar</button>

    </form>

</div>   
</body>
<style>

    *{
        padding: 0;
        margin: 0;
        font-size: 24px;
        color: white;
        font: 1.2rem "Comic Sans", sans-serif;
    }

    body {
        background-image: url(butan_background.jpg);
        padding: 5% 35%;
    }

    input {
        color: black;
    }

    button {
        margin-top: 1em;
        padding: .2em;
        font-size: 32px;
        color: black;
        border: 2px rgba(0, 0, 0, .5) solid;
    }

    .back {
        padding: .5em;
        border: 2px rgba(0, 0, 0, .5) solid;
        background-color: rgba(128, 128, 128, .6);
    }
   
</style>
</html>