<?php

class Prodotto{
  public $lunghezza;
  public $altezza;
  public $profondita;
  public $peso;

  function __construct($l,$a,$p){
    $this->lunghezza = $l;
    $this->altezza = $a;
    $this->profondita = $p;
  }

  public function getVolume(){
    return $this->$lunghezza*$this->altezza*$this->$profondita;
  }

}
?>
