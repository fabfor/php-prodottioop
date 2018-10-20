<?php
require_once 'Tracciabile.php';
require_once 'Persistable.php';


class Fattorino{
  use Tracciabile, Persistable;

  public $nome;
  public $cognome;

  function __construct($n,$c){
    $this->nome = $n;
    $this->cognome = $c;
  }

}
?>
