<?php
 include "db.php";
 include "functions.php";
?>

<?php include "includes/header.php"; ?>
<div class="container">
  <h1 class="text-center">Read</h1>
      <div class="col-sm-6">
        <pre>
          <?php
          leDados();
          ?>
        </pre>
        <?php include "includes/buttons.php"; ?>
      </div>
</div>
<?php include "includes/footer.php"; ?>
