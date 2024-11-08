<?php

include ("../quota.php");
// include ("../permissio.php");

?>

<h2>Lista de Usuários</h2><br><br>

<div>
    <table>
        <tr class="text">
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="colgroup" colspan="2">Ação</th>
        </tr>

        <?php 
            
            $query = "SELECT * FROM person WHERE admin = '0'";
            $result = mysqli_query($conn, $query);
            //if($result !=0 AND $result->num_rows != 0)
            if($result AND $result->num_rows != 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr class='text-center'>
                            <td>".$row['nome']."</td>".
                            "<td>".$row['sobrenome']. "</td>".
                            "<td>".$row['cpf']. "</td>".
                            "<td>".$row['email']. "</td>".
                            "<td>".$row['telefone']. "</td>";
                }
            }


        ?>
    </table>
</div>
