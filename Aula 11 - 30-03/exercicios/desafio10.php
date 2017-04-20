<?php
if(isset($_GET['enviar'])){
  $nome = $_GET['nome'];
  $nac1 = $_GET['nac1'];
  $nac2 = $_GET['nac2'];

  $media = ($nac1 + $nac2)/2;
}

?>

<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 11 PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Desafio 10 - Notas</h1>
        <div class="col-sm-6">
            <form action="desafio10.php" method="get">

                <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control">
                </div>

                <div class="form-group">
                <label for="nac1">NAC 1</label>
                <input type="text" name="nac1" class="form-control">
                </div>

                <div class="form-group">
                <label for="nac2">NAC 2</label>
                <input type="text" name="nac2" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="enviar" value="Calcular Média">
                <?php
                if(isset($media)){
                  echo '<div class="alert alert-success" role="alert"><strong>'. $media . '</strong></div>';
                }
                ?>


            </form>
        </div>

    </div>

  </body>
</html>
