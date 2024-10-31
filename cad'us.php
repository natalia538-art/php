<?php

include("forme.php");

header('conten-type:text/html; charsetUTF-8');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$login = $_POST['login'];
$senha = md5(md5($_POST['senha']));

$sqlLogin = "SELECT * FROM usuario WHERE login = '$login'";
$resultLogin = $conn->query($sqlLogin);
$row = mysqli_fetch_array($resultLogin, MYSQLI_ASSOC);

if(is_null($row)){

    $sql = "INSERT INTO person (idperson, nome, sobrenome, cpf, email, telefone, login, senha)
    VALUES ('', '$nome', '$sobrenome', '$cpf', '$email', '$telefone', '$login', '$senha')";

    if(mysqli_query($conn, $sql)) {

        if(mysqli_affected_rows($conn) != 0) {?>
        
        <script>
            
            alert("Usuário Cadastrado com Sucesso");
            window.location.href="forme.php";

        <script/>
              
        <?php
        } else {

            echo "ERROR".$sql . mysqli_error($conn);
        }

    } if($resultLogin->num_rows == 1){?>

        <script>
        alert("Usuário já Cadastrado");
        </script>

    <?php
    }
    
}

$coon -> close();

?>
