<?php
include "db.php";
include "functions.php";
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
      <h1 class="text-center">Pokemons de Fogo</h1>
      <pre>
        <?php
          lePokemonFogo();
        ?>
      </pre>
    </div>
  </div>
</body>
</html>
