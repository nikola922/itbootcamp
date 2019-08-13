<?php

class Kompozicija
{
    var $nazivKompozicije;
    var $imeKompozitora;
    var $godinaIzlaska;

    function stampaj()
    {
        echo "Pacijent: [" 
            . $this->nazivKompozicije . "], ["
            . $this->imeKompozitora . "], ["
            . $this->godinaIzlaska . "].<br>";
    }
    function proveravam()
    {
        if($godinaIzlaska > 1650 && $godinaIzlaska < 1750)
        {
            return true;
        }
            return false;
    }
    function  string()
    {
        if($this->nazivKompozicije == substr("Betoven", $this->$imeKompozicije)
        {
            return true;
        }
            return false;
    }

}

$kompozicija1 = new Kompozicija;
$kompozicija1->nazivKompozicije="Godisnja doba";
$kompozicija1->imeKompozitora = "Mocart";
$kompozicija1->godinaIzlaska = 1700;
$kompozicija1->stampaj();

if($kompozicija1-> proveravam()) 
{
    echo  "kompozicija je barokna <br>";
}
else
{
    echo    "kompozicija nije barokna";
}




?>