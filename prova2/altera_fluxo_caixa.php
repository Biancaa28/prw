<?php
include('conexao.php');
$id = $_GET['id'];
$sql = 'SELECT * FROM fluxo_caixa where id =' . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa</title>
    <style>
        body{
            background-color: rgb(133, 187, 235);
        }
    </style>
</head>
<body>
    <h1>Alteração Fluxo Caixa</h1>


    <form action="altera_fluxo_caixa_exe.php" method="post" enctype="multipart/form-data">
        Data: <input name= "data" value="<?php echo $row['data']?>" type="date"><br>
        Tipo: <input name= "tipo" <?php if($row['tipo'] == 'entrada') echo "checked"?> type="radio" value="entrada">entrada <input name= "tipo"<?php if($row['tipo'] == 'saida') echo "checked"?> type="radio" value="saida">saída<br>
        Valor: <input name= "valor" value="<?php echo $row['valor']?>" type= "text"><br>
        Historico: <input name= "historico" value="<?php echo $row['historico']?>" type= "text"><br>
        Cheque: <input name= "cheque" value="<?php echo $row['cheque']?>" type= "text"><br>
        <br><br><input id= "btnEnviar" type= "submit" value= "Enviar">
        <a href="index.php">Voltar</a>
        <input name="id" type="hidden" value="<?php echo $row['id']?>">
    </form>
</body>
</html>