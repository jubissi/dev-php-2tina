<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02 PHP</title>
  </head>
  <body>
    <?php
    function somar($x, $y){
      return $x + $y;
    }
    function dividir($x, $y){
      return $x / $y;
    }
    echo somar(14,8) . "<br>";
    echo dividir(14,8) . "<br>";
    ?>

  </body>
</html>
