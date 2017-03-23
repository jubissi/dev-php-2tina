<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 01 PHP</title>
  </head>
  <body>
    <?php
      if (4 == 4) { // compara só o valor
        echo "verdade";
      }else {
        echo "não";
      }
      echo "<br>";
      if (4 >= 4) {
        echo "verdade";
      }
      echo "<br>";
      if (4 != 3) {
        echo "verdade";
      }
      echo "<br>";
      if (4 === "4"){ // compara até o tipo da variável
        echo "verdade";
      }else{
        echo "não";
      }
      echo "<br>";
      if (4 == 7 || 4 < 5) {
        echo "verdade";
      }else{
        echo "não";
      }
      echo "<br>";
      if (4 == 7 && 4 < 5) {
        echo "verdade";
      }else{
        echo "não";
      }
     ?>
  </body>
</html>
