<?php
include "db.php";
function inserePokemon(){
  global $connection;

  if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $hp = $_POST['hp'];

    $n = strtoupper($nome);

    $query = "INSERT INTO pokemons(nome, tipo, hp) VALUES ('$n', '$tipo', '$hp')";
    $resultado = mysqli_query($connection, $query);

    if($resultado){
      echo "Pokemon inserido!";
    }
  }
}
function lePokemonFogo(){
  global $connection;

  $query = "SELECT * FROM pokemons WHERE tipo ='fire'";
  $resultado = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($resultado)){
    print_r($row);
  }
}
function mostaDados(){
  global $connection;

  $query = "SELECT * FROM pokemons";
  $resultado = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($resultado)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}
function atualizaPokemon(){
  global $connection;

  $nome = $_POST['nome'];
  $tipo = $_POST['tipo'];
  $hp = $_POST['hp'];

  $query = "UPDATE pokemons SET nome='$nome', tipo='$tipo', hp='$hp'";
  $resultado = mysqli_query($connection, $query);

  if($resultado){
    echo "Pokemon atualizado!";
  }
}
?>
