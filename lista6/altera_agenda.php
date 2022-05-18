<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = 'SELECT * FROM agenda where id_agenda =' . $id_agenda;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da agenda</title>
    <style>
        body{
            background-color: rgb(133, 187, 235);
        }
    </style>
</head>
<body>
    <h1>Alteração da agenda</h1>

    <form action="altera_agenda_exe.php" method="post">
        Nome: <input name= "nome" value="<?php echo $row['nome']?>" type="text"><br>
        Apelido: <input name= "apelido" value="<?php echo $row['apelido']?>" type="text"><br>
        Endereço: <input name= "endereco" value="<?php echo $row['endereco']?>" type= "text"><br>
        Bairro: <input name= "bairro" value="<?php echo $row['bairro']?>" type= "text"><br>
        Cidade: <input name= "cidade" value="<?php echo $row['cidade']?>" type= "text"><br>
        Estado: <input name= "estado" value="<?php echo $row['estado']?>" type= "text"><br>
        Telefone: <input name= "telefone" value="<?php echo $row['telefone']?>" type= "text"><br>
        Celular: <input name= "celular" value="<?php echo $row['celular']?>" type= "text"><br>
        Email: <input name= "email" value="<?php echo $row['email']?>" type= "text"><br>
        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        <br><br><input id= "btnEnviar" type= "submit" value= "Enviar">
    </form>
</body>
</html>