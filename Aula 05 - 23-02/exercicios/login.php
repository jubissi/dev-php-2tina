<?php
  if(isset($_POST['enviar'])){
    echo "ok";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost','root','fiap','login_app');

    if(!$connection){
      die("Deu ruim!");
    }else{
      echo "Conectado!";
    }
    //query para inserir os valores das variáveis
    $query = "INSERT INTO usuarios(username, password) VALUES('$username','$password')"; //uso de aspas pq sao strings, aspas simples
    //funcao para inserir dados no banco
    $resultado = mysqli_query($connection,$query);
    //validacao
    if(!$resultado){
      die("Não deu certo a inclusão :" . mysqli_error()); //aponta o erro
    }else{
      echo "Dados criados com sucesso";
    }
  }
?>

<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 05 PHP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <div class="col-sm-6">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
          </div>
          <input class="btn btn-primary" type="submit" name="enviar">
        </form>
      </div>
    </dv>
  </body>
</html>
