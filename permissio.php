<?php
session_start();

    if(!isset($_SESSION['login'])){
        ?>
        
        <script type="text/javascript">
            
            alert("Você não está logado\n Por favor, realize o login");
            window.location.href="login.php";

        <script/>
              
        <?php
    }

    session_destroy();

    ?>


    