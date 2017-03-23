<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03 PHP</title>
  </head>
  <body>
    <?php
      $lista = [343, 54, 232, 757, 21, 1];

      //maior valor
      echo max($lista);
      echo "<br>";

      //menor valor
      echo min($lista);
      echo "<br>";

      //ordenar crescente
      sort($lista); //rsort para decrescente

      //imprimir array
      echo "<pre>";
      print_r($lista);
      echo "</pre>";

      echo "<br>";
      $array = array('Juliana', 'Bissi', '996353067');
      $implode = implode(" - ", $array); //como quer separar os parâmetros da array e qual array vai ser separada
      echo $implode;
    ?>
  </body>
</html>
