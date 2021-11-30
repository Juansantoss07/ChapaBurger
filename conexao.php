<?php

$host = 'fdb21.awardspace.net';
$port = '3306';
$usuario = '3848858_onwhells';
$senha = '070620@Bj';
$database = "3848858_onwhells";


$conexao = new mysqli($host, $usuario, $senha, $database, $port);

if($conexao->connect_errno){
    echo("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>  
