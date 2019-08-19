<?php

class Vozilo
{
    private $boja;
    private $tip;

    public function __construct($boja, $tip)
    {
        $this->setBoja($boja);
        $this->setTip($tip);
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
        echo    "<p> Ispis vozila: <span style='color:$this->boja;'> boja:  
                 $this->boja, </span> a tip vozila je: $this->tip </p>";
    }
}

class Automobil extends Vozilo
{
    private $regBroj;

    public function __construct($boja, $regBroj)
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
        echo "Tip: " . $this->getTip() .
		" Boja: " . $this->getBoja() .
		" Registarski broj: " . $this->getRegBroj();
	
    }
}

class Kamion extends Vozilo
{
    private $nosivost;

    public function __construct($boja, $nosivost)
    {
        $this->setBoja($boja);
        $this->setNosivost($nosivost);
        $this->setTip("kamion");
    }
    public function setNosivost($nosivost)
    {
        $this->nosivost=$nosivost;
    }
    public function getNosivost()
    {
        return $this->nosivost;
    }
    public function ispisiKamion()
    {
        echo $this->ispisVozila() . 
		 " Nosivost kamiona(t): " . $this->getNosivost();
    }
}

class Motocikl extends Vozilo
{
    private $kubikaza;

    public function __construct($boja,$kubikaza)
    {   
        $this->setBoja($boja);
        $this->setKubikaza($kubikaza);
        $this->tip="motocikl";
    }
    public function setKubikaza($kubikaza)
    {
        $this->kubikaza=$kubikaza;
    }
    public function getKubikaza()
    {
        return $this->kubikaza;
    }
    public function ispisiMoto()
    {
        echo $this->ispisVozila() . 
        " Kubikaza motora: " . $this->getKubikaza();
    }
}



$obj=new Vozilo ("red", " automobil");
$obj->ispisVozila();

$obj1 = new Automobil("blue", 132231);
$obj1->ispisiAuto();

$obj2=new Kamion("yellow", 7.5);
$obj2->ispisiKamion();

$obj3=new Motocikl ("green", 750);
$obj3->ispisiMoto();
echo "<br> <br>";

class Osoba
{
    private $ime;
    private $prezime;
    private $godRodj;
    private $gradRodj;

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
    public function setGradRodj($gradRodj)
    {
        $this->gradRodj=$godRodj;
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
    public function getGradRodj()
    {
        return $this->gradRodj;
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
        /*
        parent::__construct($ime, $prezime, $godRodj)
        {
            $this->setPlata($plata);
            $this->setPozicija($pozicija);
        }
        */
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
$osoba->ispisOsoba();
echo "<br>";
$r1=new Zaposleni("Zoran", "Markovic", 1992, 45000, " Menadzer prodaje" );
$r1->ispisZaposlenih();
$r2=new Zaposleni("Miki", "Miljkovic", 1987, 87000, " Ekonomista ");
$r2->ispisZaposlenih();
$r3=new Zaposleni("Laki", "Lakic", 1990, 40000, "Pravnik");
$r3->ispisZaposlenih();

$radnici = array($r1, $r2, $r3);

function prosecnaPlata($radnici)
{
    $suma=0;
    $br=0;
    foreach($radnici as $r)
    {
        $suma += $r->getPlata();
        $br++;
    }
    $prosek=$suma/$br;
    return $prosek;
}

echo "<br> Prosecna plata: " .  prosecnaPlata($radnici);
echo "<br>";

function natprosecna($radnici, $radnik)
{
    $prosek= prosecnaPlata($radnici);
    if($prosek < $radnik->getPlata())
    {
        return true;
    }
    else
    {
        return false;
    }
}

if(natprosecna($radnici, $r3) == true)
{
    echo "Natprosecna plata. ";
}
else
{
    echo "Plata je ispod proseka. ";
}

?>