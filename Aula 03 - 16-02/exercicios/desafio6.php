<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03 PHP</title>
  </head>
  <body>
    <?php
      function megaSena(){
        //$numerosSortiados = array(); //nem é necessário
        $contador = 0;
        while($contador < 6){ //pode usar for também
          //$num = rand(1,60);
          //$numerosSortiados[$contador] = $num;
          //$contador++;

          $numerosSortiados[] = rand(1,60);
          $contador++;
        }

        sort($numerosSortiados);
        $implode = implode(" - ", $numerosSortiados);
        echo "Os números sorteados da Mega Sena são: " . $implode;
      }
      megaSena();
    ?>
  </body>
</html>
