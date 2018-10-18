<?php
  require 'Prodotto.php';
  require 'ProdottoDeperibile.php';

  $p = new Prodotto(30,20,30);

  $p->getVolume();

  $pd = new ProdottoDeperibile(30,20,30);

  $pd->scadenza = new \DateTime('2100-01-01');

  var_dump($pd->isExpired());

?>
