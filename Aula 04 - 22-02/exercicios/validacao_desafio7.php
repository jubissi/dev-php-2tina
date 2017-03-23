<?php
if(isset($_POST['enviar'])){
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];

  $erro = FALSE;

  if(strlen($usuario)<5||strlen($usuario)>10){
    echo "O usuário deve conter entre 5 e 10 caracteres.";
    echo "<br>";
    $erro = TRUE;
  }
  if(strlen($senha)<4){
    echo "A senha deve ter no mínimo 4 caracteres.";
    echo "<br>";
    $erro = TRUE;
  }
  if(!strstr($email, "@")){
    echo "Insira um e-mail válido.";
    echo "<br>";
    $erro = TRUE;
  }
  if(strlen($estado)!=2){
    echo "Preencha estado com sua sigla (2 caracteres).";
    echo "<br>";
    $erro = TRUE;
  }
  if(!$erro){
    echo "Formulário enviado com sucesso!";
  }
}
?>
