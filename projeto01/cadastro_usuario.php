<?php
    include('conexao.php');
    $nome_usuario = $_POST["nome"];
    $email_usuario = $_POST["email"];
    $telefone_usuario = $_POST["telefone"];

    echo '<p>Nome: '.$nome_usuario;
    echo  '<p>E-mail: '.$email_usuario;
    echo '<p>Telefone: '.$telefone_usuario;

    $sql = "INSERT INTO usuario ('nome_usuario', "

    

?>