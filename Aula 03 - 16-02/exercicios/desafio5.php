<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03 PHP</title>
  </head>
  <body>
    <?php
      function conversao($temperaturaCelsius){
        return ($temperaturaCelsius*1.8) + 32;
      }
      echo "A temperatura em graus Fahrenheit é: " . conversao(35) . "°F";
    ?>
  </body>
</html>
