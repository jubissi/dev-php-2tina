<?php
include "db.php";
include "functions.php";
insereDados();
?>

<?php include "includes/header.php"; ?>
<div class="container">
  <h1 class="text-center">Create</h1>
    <div class="col-sm-6">
        <form action="login_create.php" method="post">

            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">

            <?php include "includes/buttons.php"; ?>

        </form>
    </div>

</div>
<?php include "includes/footer.php"; ?>
