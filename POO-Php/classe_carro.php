<!-- POO em PHP -->

<?php
class Carro{
  //propriedades
  var $portas = 4;
  //metodos
  function GiraRoda(){
    echo "Acelera!";
  }
}
// Instanciando uma Classe
$bmw = new Carro();
$ferrari = new Carro();
echo $bmw->portas;
$ferrari->portas=2;
echo "<br>" . $ferrari->portas;

class Aviao extends Carro{

}
$embraer = new Aviao();
echo "<br>" . $embraer->portas;
// $bmw->GiraRoda();
// $ferrari->GiraRoda();

// if(class_exists("Carro")){
//   echo "Classe existe!";
// } else {
//   echo "Classe não existe.";
// }
?>
