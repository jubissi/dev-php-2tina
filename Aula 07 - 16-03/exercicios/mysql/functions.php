<?php
include "db.php";

  function mostraDados(){
    global $connection;
    $query = "SELECT * FROM usuarios";
    $resultado = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($resultado)){
      $id = $row['id']; //se nao fosse associativo no lugar de id seria 0
      echo "<option value='$id'>$id</option>";
    }
  }

  function atualizaTabela(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE usuarios SET ";
    $query .= "username = '$username',"; //concatenando com quebra de linha .=
    $query .= "password = '$password'";
    $query .= "WHERE id = $id";

    $resultado = mysqli_query($connection, $query);

    //Validação
    if(!$resultado){
        die("Não deu certo a atualização" .mysqli_error());
    } else {
        echo "Dados atualizados com sucesso";
    }
  }

  function deletarDado(){
    global $connection;

    $id = $_POST['id'];

    $query = "DELETE FROM usuarios ";
    $query .= "WHERE id = $id";

    $resultado = mysqli_query($connection, $query);

    //Validação
    if(!$resultado){
        die("Não deletou!" .mysqli_error());
    } else {
        echo "Dados deletados com sucesso";
    }
  }
?>
