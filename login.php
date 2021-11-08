<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0) {
      echo "<script>alert('Preencha seu e-mail ');</script>";
    }else if(strlen($_POST['senha']) == 0) {
      echo "<script>alert('Preencha sua senha ');</script>";
    } else{

      $email = $conexao->real_escape_string($_POST['email']);
      $senha = $conexao->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; 
      $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->connect_error);


      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        header("Location: index.php");

      }else{
        echo "<script>alert('Falha ao logar, e-mail ou senha incorretos');</script>";
      }
    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/style-login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  action="./login.php" method="POST"  class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
            <input type="text" name="email" id='email' placeholder="E-mail"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" id='senha' placeholder="Senha" />
            </div>
            <a id="esqueci_senha"href="#">Esqueci a senha</a>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">    
        <div class="panel left-panel">
          <div class="content">
            <h3>Primeira vez?</h3>
            <p>
              Clique no botão abaixo e cadastre-se!
            </p>
          <a href="cadastro.php"> <button class="btn transparent" id="animacao_cadastro">
              Cadastre-se
            </button></a>   
          </div>
        </div>
      </div>
    </div>
  </body>
</html>