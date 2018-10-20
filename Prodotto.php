<?php
require_once 'Tracciabile.php';

class Prodotto{
  use Tracciabile;
  public $lunghezza;
  public $altezza;
  public $profondita;
  public $peso;
  private $is_consegnato;
  private $fattorino;
  private $ts_arrivo_magazzino;

  function __construct($l,$a,$p){
    $this->lunghezza = $l;
    $this->altezza = $a;
    $this->profondita = $p;
    //automatiche
    $this->is_consegnato = false;
    $this->ts_arrivo_magazzino = new \DateTime('now');
  }

  public function getVolume(){
    return $this->lunghezza*$this->altezza*$this->profondita;
  }

  public function consegna(){
    $this->is_consegnato = true;
    $this->ts_consegna = new \DateTime('now');
  }

  public function getTempoDiConsegna(){
    return $this->ts_consegna->getTimestamp() - $this->ts_arrivo_magazzino->getTimestamp();
  }

  public function setFattorino($fatt){
    $this->fattorino = $fatt;
  }

  public function getFattorino(){
    return $this->fattorino;
  }

}
?>
