<?php
$hostname = "localhost";
$port = 3307;
$username = "root";
$password = "";
$database = "projeto02";
$con = mysqli_connect($hostname, $username, $password, $database, $port);
if(mysqli_connect_errno()){
    printf("Erro ao conectar ao banco de dados: %\n", mysqli_connect_error());
    exit;
}
?>