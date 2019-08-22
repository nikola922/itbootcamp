<?php

class Osoba
{
    private $ime;
    private $prezime;
    private $godRodj;
    
    public function __construct($ime, $prezime, $godRodj)
    {
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($godRodj);
    }
    public function setIme($ime)
    {
        $this->ime=$ime;
    }
    public function setPrezime($prezime)
    {
        $this->prezime=$prezime;
    }
    public function setGodRodj($godRodj)
    {
        $this->godRodj=$godRodj;
    }
    
    public function getIme()
    {
        return $this->ime;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }
    public function getGodRodj()
    {
        return $this->godRodj;
    }
    
    public function ispisOsoba()
    {
        echo "Ime: " . $this->getIme() .
		", Prezime: " . $this->getPrezime() .
        ", Godina rodjenja: " . $this->getGodRodj() . "<br>";
    }
}
class Zaposleni extends Osoba
{
    private $plata;
    private $pozicija;
    public function __construct($ime, $prezime, $godRodj, $plata, $pozicija)
    {
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($godRodj);
        $this->setPlata($plata);
        $this->setPozicija($pozicija);
    }
    public function setPlata($plata)
    {
        $this->plata=$plata;
    }
    public function setPozicija($pozicija)
    {
        $this->pozicija=$pozicija;
    }
    public function getPlata()
    {
        return $this->plata;
    }
    public function getPozicija()
    {
        return $this->pozicija; 
    }
    public function ispisZaposlenih()
    {
        echo  $this->ispisOsoba() . 
        " na poziciji: " . $this->getPozicija() . " sa platom od: " . $this->getPlata() . "<br>";
    }
}
$osoba=new Osoba("Zoran", "Markovic", 1992);

$r1=new Zaposleni("Zoran", "Markovic", 1992, 45000, " Menadzer prodaje" );
$r2=new Zaposleni("Miki", "Miljkovic", 1987, 87000, "Ekonomista");
$r3=new Zaposleni("Laki", "Lakic", 1990, 40000, "Pravnik");
$radnici = array($r1, $r2, $r3);

function pozicija($r)
{
    if (strpos($r->getPozicija(), 'Ekonomista') !== false)
    {
        return true;
    }
        return false;
}

foreach($radnici as $r)
{
    if(pozicija($r) == true)
    {   
        echo "Zaposlen u ekonomskom sektoru. ";
    }
    else
    {
        echo " Nije zaposljen u ekonomskom sektoru. ";
    }
}


?>