<?php
include('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = 'SELECT * FROM usuario where id_usuario =' . $id_usuario;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <style>
        body{
            background-color: rgb(133, 187, 235);
        }
    </style>
</head>
<body>
    <h1>Alteração de Usuário</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,"
    .base64_encode($row["foto_blob"]). "'width='150' height='150'/>";?>

    <form action="altera_usuario_exe.php" method="post" enctype="multipart/form-data">
        Nome: <input name= "nome" value="<?php echo $row['nome_usuario']?>" type="text"><br>
        E-mail: <input name= "email" value="<?php echo $row['email_usuario']?>" type="text"><br>
        Telefone: <input name= "telefone" value="<?php echo $row['telefone_usuario']?>" type= "text"><br>
        <input type="file" id="foto" name="foto" accept="image/*"/>
        <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">
        <br><br><input id= "btnEnviar" type= "submit" value= "Enviar">
    </form>
</body>
</html>