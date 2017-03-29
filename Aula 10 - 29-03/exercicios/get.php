<?php
print_r($_GET); //pra imprimir array
?>

<!DOCTYPE html>
<html lang"pt">
  <head>
    <meta charset="UTF-8">
    <title>Aula 10 PHP</title>
  </head>
  <body>
    <!--
    Get > depois do ? sao mostrados os parametros
    URI é sem http
    -->

    <?php
    $id = 457;
    $button = "Não clique!"
    ?>
    <a href="get.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>



  </body>
</html>
