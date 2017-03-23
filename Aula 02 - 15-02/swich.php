<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02 PHP</title>
  </head>
  <body>
    <?php
      $numero = 39;
      switch ($numero) {
        case 4:
          echo "Esse é o 4";
          break;
        case 38:
          echo "Esse é o 38";
          break;
        default:
          echo "Não encontrei o número.";
          break;
      }
    ?>
  </body>
</html>
