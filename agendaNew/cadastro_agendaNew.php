<?php
    include('conexao.php');

    //Upload da foto
    $fotoNome = $_FILES["foto"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    //Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Valid file extensions 
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    //Check extension
    if(in_array($imageFileType, $extensions_arr))

    //Upload file
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
  
    
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

    $sql = "INSERT INTO agendaNew (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email,foto_blob,foto_nome) 
	        VALUES ('".$nome."','".$apelido."','".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."','".$fotoBlob."', '".$fotoNome."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);

    

?>