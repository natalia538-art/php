<?php

include('../quota.php');

$login = $_GET['deleta'];
$sql = "DELETE FROM person WHERE login = '$login';";

$result = $conn->query($sql);

if(mysqli_affected_rows($conn)){
    ?> 
    <script type="text/javascritp">
        alert("Usuário deletado com sucesso");
        window.location.href="adimin.php";
    </script>
    <?php
} else {
    ?> 
    <script type="text/javascritp">
        alert("Erro ao deletar o usuário");
        window.location.href="adimin.php";
    </script>
    <?php
}