<?php
include('conexao.php');
$id_agendaNew = $_GET['id_agendaNew'];
$sql = 'DELETE FROM agendaNew WHERE id_agendaNew='.$id_agendaNew;
echo "<h1> Exclusão da agenda </h1>";
$result = mysqli_query($con, $sql);
if($result)
echo "Registro excluído com sucesso<br>";
else
echo "Erro ao tentar excluir agenda: ".mysqli_error($con)."<br>"
?>

<a href='listar_agendaNew.php'> Voltar</a>