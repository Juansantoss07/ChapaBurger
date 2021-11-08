<?php

$usuario = 'root';
$senha = 'root';
$database = "livezero";
$host = '127.0.0.1';
$port = '3306';

$conexao = new mysqli($host, $usuario, $senha, $database, $port);

if($conexao->connect_errno){
    echo("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>  
