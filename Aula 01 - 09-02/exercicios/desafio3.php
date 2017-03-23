<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 01 PHP</title>
  </head>
  <body>
    <?php
      $mediaMin = 6;
      $pesoNAC = 0.2;
      $pesoAM = 0.3;
      $pesoPS = 0.5;
      $porcentagemFaltas = 0.2;
      $notaNAC = 7;
      $notaAM = 8.7;
      $notaPS = 6.2;
      $faltas = 13;
      $aulas = 70;

      $media = ($pesoNAC*$notaNAC) + ($pesoAM*$notaAM) + ($pesoPS*$notaPS);
      echo $media;
      echo "<br>";
      $limFaltas = $aulas*$porcentagemFaltas;

      if ($media >= $mediaMin && $faltas <= $limFaltas){
        echo "Aprovado";
      }elseif($media >= $mediaMin && $faltas > $limFaltas){
        echo "Reprovado por faltas. Média: $media";
      }else{
        echo "Reprovado";
      }
     ?>
  </body>
</html>
