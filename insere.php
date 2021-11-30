<?php

include 'conexao.php';

$nome = $_POST['nome_cas'];
$cpf = $_POST['cpf'];
$tel = $_POST['tel'];
$email = $_POST['email_cas'];
$senha = $_POST['senha_cas'];

$sql = "INSERT INTO usuarios (nome, cpf, telefone, email, senha ) VALUES";
$sql .="('$nome', '$cpf', '$tel', '$email', '$senha')";

if($conexao->query($sql) === TRUE) {
     echo "<script> alert('Usuario cadastrado com sucesso!');
     window.location.href='index.php';
     </script>";
}else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>


