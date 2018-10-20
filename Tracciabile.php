<?php
  trait Tracciabile{
    private $lat;
    private $lng;

    public function calcolaDistanzadDaLatLng($t_lat,$t_lng){
      // calcoli
      return 43.2;
    }

    public function setPosition($lati,$lngt){
      $this->lat = $lati;
      $this->lng = $lngt;
    }
  }
?>
