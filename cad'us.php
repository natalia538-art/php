<?php

include("forme.php");

header('conten-type:text/html; charsetUTF-8')

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
    
}

?>