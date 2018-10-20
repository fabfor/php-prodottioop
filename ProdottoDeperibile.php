<?php

class ProdottoDeperibile extends Prodotto{
  public $scadenza;

  public function isExpired(){
    if ($this->scadenza >= new \DateTime('now')){
      return false;
    }
    else {
      return true;
    }
  }
}

?>
