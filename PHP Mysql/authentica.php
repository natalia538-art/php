<?php
include("quota.php");

header('Content-type:text/html; charset=UTF-8');

$login = $_POST['login'];
$senha = md5(md5($_POST['senha']));

// Verificando se o login existe no banco
$sqlLogin = "SELECT * FROM person WHERE login = '$login'";
$resultLogin = $conn->query($sqlLogin);
$row = mysqli_fetch_array($resultLogin, MYSQLI_ASSOC);

if (!$row) { 
    // Caso o usuário não exista no banco
    ?>
    <script type="text/javascript">
        alert("Usuário não existe na base de dados\nFavor realizar o cadastro");
        window.location.href="forme.php";
    </script>
    <?php
    exit; // Saída do script após redirecionamento
}

// Verificando se a senha e o login estão corretos
$sql = "SELECT * FROM person WHERE login = '$login' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Se o login e senha estiverem corretos
    $row = $result->fetch_assoc(); // Atualiza a variável $row com o resultado correto

    if ($row['admin'] == 0) {
        // Caso o usuário não seja admin
        ?>
        <script type="text/javascript">
            alert("Bem-vindo <?php echo $row['nome']; ?>");
            window.location.href = "https://www.google.com";
        </script>
        <?php
    } else {
        // Caso o usuário seja admin
        ?>
        <script type="text/javascript">
            alert("Bem-vindo <?php echo $row['nome']; ?>");
            window.location.href = "admin/admin.php";
        </script>
        <?php
    }
} else {
    // Caso o login ou senha estejam errados
    ?>
    <script type="text/javascript">
        alert("Login ou senha não conferem");
        window.location.href = "form.php";
    </script>
    <?php
}

$conn->close();
?>
