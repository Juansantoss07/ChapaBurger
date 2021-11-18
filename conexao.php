<?php

$usuario = '3827388_projetouni9';
$senha = 'root_uni9';
$database = "3827388_projetouni9";
$host = 'fdb20.awardspace.net';


$conexao = new mysqli($host, $usuario, $senha, $database);

if($conexao->connect_errno){
    echo("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}

?>  
