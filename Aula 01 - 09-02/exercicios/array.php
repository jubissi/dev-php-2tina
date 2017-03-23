<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 01 PHP</title>
  </head>
  <body>
    <?php
      $listaNumeros = array(17, 232, 248, 2, 42);
      echo $listaNumeros[1];
      echo "<br>";
      print_r($listaNumeros); // imprime a lista ArrayAccess
      echo "<br>";

      $nomes = array('Juliana', 'Marcelo', 'Maurício');
      print_r($nomes);
      echo "<br>";

      // Arrays Associativos
      $nomes2 = array("primeiro_nome" => 'Juliana', "segundo_nome" => 'Bissi');
      echo $nomes2['segundo_nome'];
     ?>
  </body>
</html>
