<?php
/*

1) Um imposto é calculado com base na seguinte tabela :

Até 1.200,00 -> isento
de 1.201,00 a 5.000,00 -> 10%
de 5.001,00 a 10.000,00 -> 15%
acima de 10.000,00 -> 20%.

Implemente um script em PHP que calcule os impostos a pagar para um valor em cada faixa. Para cada um, mostre uma mensagem que identifique na tela a que se refere cada valor.

2) Philippe e Renata viajaram de Los Angeles até San Diego em 2 horas, percorreram a distância de 124 milhas. Sabendo que 1 milha equivale a 1,60934 quilómetros, crie uma função com parâmetro para descobrir quantos quilómetros eles andaram.

*/

//1
function impostoRenda($renda){
  if($renda<=1200){
    $porcentagem = 0;
  }elseif($renda>1200&&$renda<=5000){
    $porcentagem = 0.1;
  }elseif($renda>5000&&$renda<=10000){
    $porcentagem = 0.15;
  }elseif($renda>10000){
    $porcentagem = 0.2;
  }
  return "O imposto a ser pago para uma renda de R$" . number_format($renda, 2) . " é igual a R$" . number_format($renda*$porcentagem, 2);
}
echo impostoRenda(5256);
echo "<br>";

//2
function quilometragem($distancia){
  $quilometragem = $distancia*1.60934;
  return $quilometragem;
}
echo quilometragem(124) . "km";
?>
