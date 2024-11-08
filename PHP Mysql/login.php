<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body align="center">
<div class="back">

    <h2>LOGIN</h2><br>

    <form action="authentica.php" method ="post">
        <h3>Usuário</h3>
        <input type="text" name="login" required>
        <h3>Senha</h3>
        <input type="password" name="senha" required><br>
        <button type="submit" name="entrar">Login</button>
        <!-- <input type="submit" name="entrar" value="Login"> -->
    </form><br>

        <h4>Ainda nãp tem cadastro? <a href="forme.php">Cadastre-se</a></h4>

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