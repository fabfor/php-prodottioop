<?php
  require_once 'Prodotto.php';
  require_once 'Fattorino.php';
  require_once 'ProdottoDeperibile.php';
  require_once 'ProdottoUrgente.php';
  require_once 'TooLateDeliveryException.php';


  $f = new Fattorino("Fabio","Forg");
  $f->save();

  $pd = new ProdottoUrgente(30,20,30, new DateTime('2018-01-02 23:00:00'));
  $pd->setFattorino($f);
  try{
    $pd->consegna();
  }
  catch(TooLateDeliveryException $e){
    echo ("Pacco consegnato troppo tardi.");
    echo ("<br>");
    echo ("Il fattorino ".$pd->getFattorino()->nome." verrà multato");
    echo ("<br>");
    echo ("<br>");
  }

  echo '<pre>' . var_export($pd, true) . '</pre>';
?>
