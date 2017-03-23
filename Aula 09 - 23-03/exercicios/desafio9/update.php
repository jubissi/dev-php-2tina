<?php
include "db.php";
include "functions.php";

if(isset($_POST['update'])){

}
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
        <form action="update.php" method="post">

            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" class="form-control">
            </div>

            <div class="form-group">
              <label for="tipo">Tipo</label>
              <input type="text" name="tipo" class="form-control">
            </div>

            <div class="form-group">
              <select name="id">
              <!--  <option value="">1</option> -->
              <?php
                mostraDados();
              ?>
              </select>
            </div>

            <input class="btn btn-primary" type="submit" name="update" value="Atualizar">

        </form>
    </div>
</body>
</html>
