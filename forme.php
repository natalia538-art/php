<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body align="center">

    <form name="cadastro" method="post" action="cad'us.php">

    <label>Nome</label>
    <input type="text" name="nome" required>
    <label>Sobrenome</label>
    <input type="text" name="sobrenome" required>
    <label>CPF</label>
    <input type="number" name="cpf" required>
    <label>Email</label>
    <input type="text" name="email">
    <label>Telefone</label>
    <input type="text" name="telefone">
    <label>Login</label>
    <input type="text" name="login" required>
    <label>Senha</label>
    <input type="text" name="senha" required>

    <button type="sumbit" name="cadastro">Enviar</button>

    </form>
</body>
</html>