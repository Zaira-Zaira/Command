<?php 


class Product{

    public function __construct($tablettes,  $pc, $portable, $adresse, $date)
    {
        $this->date = $date;
        $this->tablettes = $tablettes;
        $this->pc = $pc;
        $this->portable = $portable;
        $this->adresse = $adresse;
    }


    public function getDate()
    {
           return $this->date;
    }
    
    public function getTablettes()
    {
           return $this->tablettes;
    }


    public function getPc()
    {
           return $this->pc;
    }


    public function getPortable()
    {
           return $this->portable;
    }


    public function getAdresse()
    {
           return $this->adresse;
    }


    public function  totalProducts()
    {
           return $this->tablettes + $this->pc + $this->portable;
    }


    public function getTva($tablettesPrice, $pcPrice, $portablePrice)
    {
           return $this->totalPrice($tablettesPrice, $pcPrice, $portablePrice) * (1+20/100);
    }


    public function totalPrice($tablettesPrice, $pcPrice, $portablePrice)
    {
          return $this->tablettes * $tablettesPrice + $this->pc * $pcPrice + $this->portable * $portablePrice;
    }


}


?>