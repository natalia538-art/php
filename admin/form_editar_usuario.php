<?php

    include('../quota.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email= $_POST['email'];
    $telefone= $_POST['telefone'];
    $login = $_POST['login'];
    $senha = md5(md5($_POST['senha']));

    $sql = "UPDATE person SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', telefone = '$telefone', email = '$email', senha = '$senha' 
    WHERE login = '$login'";


?>
