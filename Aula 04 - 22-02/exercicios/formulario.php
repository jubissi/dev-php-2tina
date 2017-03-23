<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 04 PHP</title>
  </head>
  <body>
    <?php
      if(isset($_POST['enviar'])){//verifica se existe o enviar no formulario
        //coletando informacoes
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        /*echo "Seu nome de usuário é: " . $usuario;
        echo "<br>";
        echo "Sua senha: " . $senha;*/

        $nomes = array("Gustavo","Marcelo","Renata");

        if(strlen($usuario)<5){
          echo "Nome de usuário deve ter mais que 5 caracteres";
        }
        if(strlen($usuario>15)){
          echo "Nome de usuário deve ter menos que 15 caracteres";
        }

        if(in_array($usuario, $nomes)){//verificar se há o parametro usuario na variavel nome
          echo "Bem vindo, " . $usuario;
        }else{
          echo "Você não tem permissão.";
        }
      }
    ?>
    <form action="formulario.php" method="post">
      <input type="text" placeholder="usuário" name="usuario"><br>
      <input type="password" placeholder="senha" name="senha"><br>
      <input type="submit" name="enviar">

      <!--
      POST mais de 2000 caracteres e envia através de script php > verificar*
      GET envia através de parâmetros no navegador
      -->
    </form>
  </body>
</html>
