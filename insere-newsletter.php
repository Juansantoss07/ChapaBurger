<?php

include 'conexao.php';

$new = $_POST['newsletter'];

$sql = "INSERT INTO comunidade (newsletter) VALUES";
$sql .="('$new')";

if($conexao->query($sql) === TRUE) {
    echo "<script> alert('E-mail enviado com sucesso!');
    window.location.href='index.php';
    </script>";
}else {
   echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>

