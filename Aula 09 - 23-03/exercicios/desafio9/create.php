<?php
include "db.php";
include "functions.php";
inserePokemon();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">Insere Pokemon</h1>
      <form action="create.php" action="post">
        <div class="form-group">
          <label for="nome">Nome do Pokemon</label>
          <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="tipo">Tipo do Pokemon</label>
          <input type="text" name="tipo" class="form-control">
        </div>
        <div class="form-group">
          <label for="hp">HP</label>
          <input type="range" min="0" max="300" step="5" onchange="showValue(this.value)" name="hp">
          <span id="range" name="hp">0</span>
            <script type="text/javascript">
              function showValue(){
                document.getElementById("range").innerHTML=newValue;
              }
            </script>
            <br>
          <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
        </div>

      </form>
    </div>
  </div>
</body>
</html>
