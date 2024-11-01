<?php
include("quota.php");

header('conten-type:text/html; charsetUTF-8');

$login = $_POST['login'];
$senha = md5(md5($_POST['senha']));

    $sqlLogin = "SELECT * FROM person WHERE login = '$login'";
    $resultLogin = $conn->query($sqlLogin);
    $row = mysqli_fetch_array($resultLogin, MYSQLI_ASSOC);

    if(is_null($row)){?>
        
        <script>
            
            alert("Usuário não existe na base de bados\nFavor realizar o cadastro");
            window.location.href="forme.php";

        <script/>
              
        <?php
}

    $sql = "SELECT * FROM person WHERE login = '$login' AND senha = '$senha'";
    $result = $conn->query($sql);

    if($result->$num_rows == 1 && $row['admin'] == 0) {?>
        
        <script type="text/javascript">
            
            alert("Bem-vindo <?php echo $row['nome']?>");
            window.location.href="https://google.com";

        <script/>
              
        <?php
}

    if($result->$num_rows == 1 && $row['admin'] == 1) {?>
        
        <script type="text/javascript">
        
            alert("Bem-vindo <?php echo $row['nome']?>");
            window.location.href="https://google.com";

        <script/>
          
        <?php
} else {?>
        
    <script type="text/javascript">
    
        alert("Login ou senha não conferem : <?php echo $row['login']?>");
        window.location.href="form.php";

    <script/>
      
    <?php
}

$coon -> close();

?>


    

    