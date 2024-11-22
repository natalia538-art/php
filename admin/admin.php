<?php

include ("../quota.php");
// include ("../permissio.php");

?>

<h2>Lista de Usuários</h2><br><br>

<div>
    <table align="center">
        <tr class="text">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Login</th>
            <th scope="colgroup" colspan="2">Ação</th>
        </tr>

        <?php 
            
            $query = "SELECT * FROM person WHERE admin = '0'";
            $result = mysqli_query($conn, $query);
            //if($result !=0 AND $result->num_rows != 0)
            if($result AND $result->num_rows != 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='text-center'>
                            <td>".$row['idperson']."</td>".
                            "<td>".$row['nome']. "</td>".
                            "<td>".$row['sobrenome']. "</td>".
                            "<td>".$row['cpf']. "</td>".
                            "<td>".$row['email']. "</td>".
                            "<td>".$row['telefone']. "</td>".
                            "<td>".$row['login']. "</td>";
                    echo "<td>
                            <button 
                            onclick='location.href=\"editar_usuario.php?editar=".$row["login"]."\"'> EDITAR </button>";

                    echo "<td>
                            <button 
                            onclick='location.href=\"deleta_usuario.php?deleta=".$row["login"]."\"'> DELETA </button>";
                }
            }


        ?>
    </table>
</div>

<h2>Lista de Admins</h2><br><br>

<div>
    <table align="center">
        <tr class="text">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Login</th>
            <th scope="colgroup" colspan="2">Ação</th>
        </tr>

        <?php 
            
            $query = "SELECT * FROM person WHERE admin = '1'";
            $result = mysqli_query($conn, $query);
            //if($result !=0 AND $result->num_rows != 0)
            if($result AND $result->num_rows != 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='text-center'>
                            <td>".$row['idperson']."</td>".
                            "<td>".$row['nome']. "</td>".
                            "<td>".$row['sobrenome']. "</td>".
                            "<td>".$row['cpf']. "</td>".
                            "<td>".$row['email']. "</td>".
                            "<td>".$row['telefone']. "</td>".
                            "<td>".$row['login']. "</td>";

                    echo "<td>
                            <button 
                            onclick='location.href=\"editar_usuario.php?editar=".$row["login"]."\"'>EDITAR </button>";

                    echo "<td>
                            <button 
                            onclick='location.href=\"deleta_usuario.php?deleta=".$row["login"]."\"'>DELETA </button>";
                }
            }


        ?>
    </table>
</div>

<style>
    *{
        padding: 0;
        margin: 0;
    }

    table{

    }

    td, th{
        text-align: center;
        border: 1px black solid;
        padding: .2em;
    }
</style>