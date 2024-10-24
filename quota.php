<?php

    $servername = "localhost";
    $username = "professor";
    $password = "professor1234";
    $dbdname = "nova";

    $conn = new mysqli($servername, $username, $password, $dbdname);

    if($conn -> connect_error){
        die("Conexão não fucionou!" . mysqli_connect_error());

    } else {

        // echo ('<br><br><h2 align = "center"> Conexão bem-sucedida</h2>');
    }



?>