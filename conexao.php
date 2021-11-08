<?php

$usuario = 'root';
$senha = '';
$database = "";
$host = '';
$port = '';

$conexao = new mysqli($host, $usuario, $senha, $database, $port);

if($conexao->connect_errno){
    echo("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>  
