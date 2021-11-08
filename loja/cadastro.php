
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
    <title>cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
         
          <form action="./insere.php" method="POST" name="signup"  class="sign-in-form">
            <h2 class="title">Cadastre-se</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
            <input type="text" name="nome_cas" id="nome_cas" placeholder="Nome completo" />
            </div>
            <div class="input-field">
              <i class="fas fa-wallet"></i>
            <input type="text" name="cpf" id="cpf" placeholder="CPF" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
            <input type="text" name="tel" id="tel"  placeholder="Telefone" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  name="email_cas" id="email_cas" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"  name="senha_cas" id="senha_cas" placeholder="Crie uma senha" />
            </div>
            <input type="submit" class="btn" value="Cadastrar"/>
          </form>
        </div>
      </div>

      <div class="panels-container">    
        <div class="panel left-panel">
          <div class="content">
            <h3>Já tem cadastro?</h3>
            <p>
              Clique no botão abaixo para fazer login!
            </p>
          <a href="login.php"> <button class="btn transparent" id="animacao_cadastro">
              Login
            </button></a>   
          </div>
        </div>
      </div>
    </div>
  </body>
</html>