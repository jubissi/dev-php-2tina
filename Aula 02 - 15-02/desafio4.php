<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02 PHP</title>
  </head>
  <body>
    <?php
      for ($i=0; $i <= 10; $i++) {
        for ($a=0; $a <= 10; $a++) {
          echo $i . " X " . $a . " = " . $i*$a . "<br>";
        }
        echo "<br>";
      }
      // $numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
      // $numerosInverso = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
      //
      // foreach ($numeros as $individual) {
      //   foreach ($numerosInverso as $individualInverso) {
      //     echo $individual . " X " . $individualInverso . " = " . $individual*$individualInverso . "<br>";
      //   }
      //   echo "<br>";
      // }
    ?>
  </body>
</html>
