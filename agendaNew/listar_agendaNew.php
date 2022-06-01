<?php
include('conexao.php');
$sql = 'SELECT * FROM agendaNew';
$result = mysqli_query($con, $sql);
//$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem da agenda</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Listagem da agenda</h1>
    <table align= "center" border="1" width=500> 
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Excluir</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" .$row['id_agendaNew'] ."</td>";
            echo "<td><a href='altera_agendaNew.php?id_agendaNew=" .$row['id_agendaNew']."'>" .$row['nome'] ."</a></td>";
            echo "<td><img src='data:image/jpeg;base64, ".base64_encode($row["foto_blob"]).
            "' width='150' height='150' /></td>";
            echo "<td>" .$row['apelido'] ."</td>";
            echo "<td>" .$row['endereco'] ."</td>";
            echo "<td>" .$row['bairro'] ."</td>";
            echo "<td>" .$row['cidade'] ."</td>";
            echo "<td>" .$row['estado'] ."</td>";
            echo "<td>" .$row['telefone'] ."</td>";
            echo "<td>" .$row['celular'] ."</td>";
            echo "<td>" .$row['email'] ."</td>";
            echo "<td><a href='excluir_agendaNew.php?id_agendaNew=".$row['id_agendaNew']."'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>