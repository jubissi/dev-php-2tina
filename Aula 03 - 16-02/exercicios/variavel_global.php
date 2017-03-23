<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03 PHP</title>
  </head>
  <body>
    <?php
      $x = "fora";

      function teste(){
        global $x;
        $x = "dentro";
      }

      echo $x;
      echo "<br>";
      teste(); //pega a variável global > precisa definir na função, se não só relaciona com as de fora
      echo $x;
    ?>
  </body>
</html>
