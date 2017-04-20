<?php
  $nome = "NomeDoCookie";
  $valor = 100;
  $expira = time() + (60*60*24*7);

  setcookie($nome, $valor, $expira);
?>

<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 11 PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>
  <body>
    <?php
    /*if(isset($_COOKIE["NomeDoCookie"])){
      $nomeCookie = $_COOKIE["NomeDoCookie"];
      echo $nomeCookie;
    }else{
      $nomeCookie = "";
    }*/
    if(isset($_COOKIE["cookie_teste"])){
      echo "Você já passou por aqui";
    }else{
      echo "Você nunca passou por aqui";
      setcookie("cookie_teste", "Algum valor...", time()+3600);
    }
    ?>


  </body>
</html>
