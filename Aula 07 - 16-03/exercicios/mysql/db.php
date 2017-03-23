<?php
//Estabelecendo a conexão
$connection = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');

if(!$connection){
   die("Vish.. Deu ruim");
}
?>
