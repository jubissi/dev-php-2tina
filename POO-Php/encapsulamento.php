<?php
  class MinhaClasse {
    public $publica = "Variável Pública";
    protected $protegida = "Variável Protegida";
    private $privada = "Variável Privada";

    function imprimeAlo(){
      echo $this->publica;
      echo $this->protegida;
      echo $this->privada;
    }
  }

  class OutraClasse extends MinhaClasse {
    protected $protegida = "Protegida 2";

    function imprimeAlo(){
      echo $this->publica;
      echo $this->protegida;
      echo $this->privada;
    }
  }

  $obj = new MinhaClasse();

  // echo $obj->publica;
  // echo $obj->protegida;
  $obj->imprimeAlo();

  $outroObj = new OutraClasse();

  // echo "<br>" . $outroObj->publica;
  // echo $outroObj->protegida;
  // echo $outroObj->privada;
  echo "<br>";
  $outroObj->imprimeAlo();


?>
