<?php

class Vozilo
{
    public $boja;
    public $tip;

    public function __construct($boja, $tip)
    {
        $this->boja=$boja;
        $this->tip=$tip;
    }

    public function setBoja($boja)
    {
        $this->boja=$boja;
    }

    public function setTip($tip)
    {
        $this->tip=$tip;
    }

    public function getBoja()
    {
        return $this->boja;
    }
    
    public function getTip()
    {
        return $this->tip;
    }

    public function ispisVozila()
    {
        echo    "<p style='color:$this->boja;'> Ispis vozila: 
                 $this->boja, a tip vozila je: $this->tip </p>";
    }
}

class Automobil extends Vozilo
{
    public $regBroj;

    public function __construct()
    {
        $this->setBoja($boja);
        $this->setTip("automobil");
        $this->setRegBroj($regBroj);
    }
    public function setRegBroj($regBroj)
    {
        $this->regBroj=$regBroj;
    }
    public function getRegBroj()
    {
        return $this->regBroj;
    }
    public function ispisiAuto()
    {
        echo "Tip: " . $this->getTip() . " Boja: " . $this->getBoja() . 
             " Registarski broj : " . $this-getRegBroj();
    }
}

class Kamion extends Vozilo
{
    public function __construct()
    {
        $this->tip="kamion";
    }
    public function setBoja($boja)
    {
        $this->boja=$boja;
    }
    public function setSofer($sofer)
    {
        $this->sofer=$sofer;
    }
}

class Motocikl extends Vozilo
{
    public function __construct()
    {
        $this->tip="motocikl";
    }
    public function setBoja($boja)
    {
        $this->boja=$boja;
    }
}



$obj=new Vozilo ("red", " automobil");
$obj->ispisVozila();

$obj1 = new Automobil("blue", 132231);
$obj1->ispisiAuto();

class Osoba
{
    public $ime;
    public $prezime;
    public $godinaRodjenja;

}

class Zaposleni extends Osoba
{
    public $plata;
    public $pozicija;

    public function __construct($plata)
    {
        $this->plata=$plata;
    }
}


?>