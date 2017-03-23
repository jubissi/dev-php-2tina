<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 01 PHP</title>
  </head>
  <body>
    <?php
      $assinatura = 12.9;
      $interurbano = 0.04;
      $limInterurbano = 90;
      $celular = 0.2;
      $numInterurbano = 120;
      $numCelular = 37;

      echo "Valor: " . ($assinatura + ($numInterurbano-$limInterurbano)*$interurbano + $numCelular*$celular);
      ?>
  </body>
</html>
