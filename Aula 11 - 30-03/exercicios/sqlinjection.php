<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 11 PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>
  <body>

    <?php
      //proteção contra sqlinjection
      $pokename = mysqli_real_escape_string($connection,$pokenome);
    ?>

  </body>
</html>
