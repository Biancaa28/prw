<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    echo "<P> Nome: ".$nome. "<br>";
    echo "<P> Apelido: ".$apelido. "<br>";
    echo "<P> Endereco: ".$endereco. "<br>";
    echo "<P> Bairro: ".$bairro. "<br>";
    echo "<P> Cidade: ".$cidade. "<br>";
    echo "<P> Estado: ".$estado. "<br>";
    echo "<P> Telefone: ".$telefone. "<br>";
    echo "<P> Celular: ".$celular. "<br>";
    echo "<P> Email: ".$email. "<br>";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email) 
	        VALUES ('".$nome."','".$apelido."','".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);

    

?>