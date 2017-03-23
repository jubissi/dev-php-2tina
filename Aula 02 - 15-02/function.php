<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02 PHP</title>
  </head>
  <body>
    <?php
      function digaAlgo(){
        echo "Hoje tem jogo do timão!";
      }
      //digaAlgo();
      function calcula(){
        echo 457 + 122;
      }
      function init(){
        digaAlgo();
        echo "<br>";
        calcula();
      }
      init();
    ?>
  </body>
</html>
