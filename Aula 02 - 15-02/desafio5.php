<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02 PHP</title>
  </head>
  <body>
    <?php
      /*
      Robson, quer comprar 8750 dólares, sabendo que a cotação atual é R$3,08 e o frete custa R$17,00.
      Qual o valor total (em R$) que Robson desembolsará.
      */
      function valorTotal($valor, $cotacao, $frete){
        return $valor*$cotacao + $frete;
      }
      echo valorTotal(8750, 3.08, 17);
    ?>
  </body>
</html>
