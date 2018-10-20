<?php
require_once 'TooLateDeliveryException.php';

class ProdottoUrgente extends Prodotto{
  private $data_limite;

  function __construct($l,$a,$p,$dl){
    parent::__construct($l,$a,$p);
    $this->data_limite = $dl;
  }

  public function consegna(){
    $now = new \DateTime('now');
    if ($now > $this->data_limite){
      throw new TooLateDeliveryException;
    }
    else{
      $this->is_consegnato = true;
      $this->ts_consegna = new \DateTime('now');
    }
  }
}
?>
