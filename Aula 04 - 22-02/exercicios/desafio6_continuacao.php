<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03 PHP</title>
  </head>
  <body>
    <?php
      //para nao repetir numero sorteado
      function megaSena(){
        $n = array();
        while(count($n) < 6){ //count conta as posições contando a parti do 0
          $numerosSortiados = rand(1,60);
          $n[$numerosSortiados] = $numerosSortiados;
          //array associativa > dar nome pra array não pode repetir o nome, entao o código é repetido

          echo $numerosSortiados . "<br>";
        }
        sort($n);
        $implode = implode(" - ", $n);
        echo "Os números sorteados da Mega Sena são: " . $implode;
      }
      megaSena();
    ?>
  </body>
</html>
