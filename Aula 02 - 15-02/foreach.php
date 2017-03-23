<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02 PHP</title>
  </head>
  <body>
    <?php
      //foreach é utilizado com arrays
      $numeros = array(234, 56, 87, 90, 145);
      foreach ($numeros as $numero) {
        echo $numero . "<br>";
      }
    ?>
  </body>
</html>
