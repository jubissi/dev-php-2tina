<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03 PHP</title>
  </head>
  <body>
    <?php
      $string = "Faltam 10 dias para o Carnaval!";
      $string2 = "JuLiAnA";

      echo strlen($string); //numero de caracteres
      echo "<br>";
      echo strtoupper($string2); //caixa alta
      echo "<br>";
      echo strtolower($string2); //caixa baixa
      echo "<br>";

      if(strstr($string, "!")){ //encontrar string na string
        echo "Encontrei";
      }else{
        echo "Não encontrei";
      }
    ?>
  </body>
</html>
