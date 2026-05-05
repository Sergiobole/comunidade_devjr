<?php
require_once "database/db.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - <?php echo PROJECT_NAME; ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 80vh;
      display: flex;
      flex-direction: column;
    }
    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px 10px;
    }
    .register-container {
      background: white;
      border-radius: 10px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
      padding: 25px;
      width: 80%;
      max-width: 400px;
    }
    .register-container h2 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
      font-weight: 600;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
      transition: border-color 0.3s;
    }
    .form-group input:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
    }
    .btn-register {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s;
      margin-top: 20px;
    }
    .btn-register:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
    }
    .login-link {
      text-align: center;
      margin-top: 20px;
      color: #666;
      font-size: 14px;
    }
    .login-link a {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
    }
    .login-link a:hover {
      text-decoration: underline;
    }
    footer {
      background: rgba(0, 0, 0, 0.1);
      color: white;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
<main>
  <div class="register-container">
    <h2><?php echo PROJECT_NAME; ?></h2>
    <h5 style="text-align: center; color: #999; margin-bottom: 30px;">Criar Conta</h5>
    
    <form method="post" action="./register.php">
      <div class="form-group">
        <label for="fullname">Nome Completo</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>        

      <div class="form-group">
        <label for="username">Usuário</label>
        <input type="text" id="username" name="username" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
      </div>
      
      <button type="submit" class="btn-register" name="register">Registrar</button>
      <div class="btn-group-toggle" data-toggle="buttons">
    <center>
            <label class="btn btn-warning">
                <input type="checkbox" required> Concordo com os termos e condições
            </label>
    </center>
      </div>
    </form>
    
    <div class="login-link">
      Já tem conta? <a href="./login.php">Fazer login</a>
    </div>
  </div>
</main>

<footer>
  <p>&copy; 2026 <?php echo PROJECT_NAME; ?>. Todos os direitos reservados.</p>
</footer>

</body>
</html>

<?php




?>