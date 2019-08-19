<?php

class Osoba
{
    private $ime;
    private $prezime;
    private $godRodj;
    private $gradRodj;

    public function __construct($ime, $prezime, $godRodj, $gradRodj)
    {
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($godRodj);
        $this->setGodRodj($gradRodj);
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
        echo "Ime: " . $this->getIme() . "<br>" . 
		" Prezime: " . $this->getPrezime() . "<br>" . 
        " Godina rodjenja: " . $this->getGodRodj() .  "<br>" . 
        " Grad rodjenja: " . $this->getGradRodj() . "<br>";
    }

}

class Kosarkas extends Osoba
{
    private $visina;
    private $tezina;
    private $BrPoena;
    private $BrUtakmica;
    private $pozicija;

    public function __construct($ime, $prezime, $godRodj, $gradRodj, $visina, $tezina, $BrPoena, $BrUtakmica, $pozicija)
    {
        parent::__construct($ime, $prezime, $godRodj, $gradRodj);
        
            $this->setVisina($visina);
            $this->setTezina($tezina);
            $this->setBrPoena($BrPoena);
            $this->setBrUtakmica($BrUtakmica);
            $this->setPozicija($pozicija);
        
    }

    public function setVisina($visina)
    {
        $this->visina=$visina;
    }
    public function setTezina ($tezina)
    {
        $this->tezina=$tezina;
    }
    public function setBrPoena ($BrPoena)
    {
        $this->BrPoena=$BrPoena;
    }
    public function setBrUtakmica ($BrUtakmica)
    {
        $this->BrUtakmica=$BrUtakmica;
    }
    public function setPozicija ($pozicija)
    {
        $this->pozicija=$pozicija;
    }
    public function getVisina()
    {
        return $this->visina;
    }
    public function getTezina()
    {
        return $this->tezina;
    }
    public function getBrPoena()
    {
        return $this->BrPoena;
    }
    public function getBrUtakmica()
    {
        return $this->BrUtakmica;
    }
    public function getPozicija()
    {
        return $this->pozicija;
    }
    public function ispisKosarkasa()
    {
        echo $this->ispisOsoba() . 
        " visina: " . $this->getVisina() . "<br>" .  " tezina: " . $this->getTezina() . "<br>" . 
        " broj poena: " . $this->getBrPoena() ."<br>" .  " broj odigranih utakmica: " . $this->getBrUtakmica() . "<br>" . 
        "sa pozicija: " . $this->getPozicija() . "<br> <br>"; 
    }

}

$k1=new Kosarkas ("Bogdan", "Bogdanovic", 1992, "Beograd", 191, 89, 353, 12, 2);
$k1->ispisKosarkasa();
$k2=new Kosarkas("Nikola", "Pekovic", 1983, "Podgorica", 211, 120, 280, 15, 5);
$k2->ispisKosarkasa();
$k3=new Kosarkas("Nemanja", "Bjelica", 1986, "Subotica", 204, 105, 218, 12, 4);
$kosarkasi=array($k1, $k2, $k3);

function prosecanBroj($k)
{
    $prosek=$k->getBrPoena()/$k->getBrUtakmica();
    return $prosek;
}
echo "Prosecan broj poena: " . prosecanBroj($k1);

function teskiCentar($k)
{
    if($k->getVisina() >= 210 && $k->getTezina() > 110 && $k->getPozicija() == 5)
    {
        return "<br> Teski centar. ";
    }
}
foreach($kosarkasi as $k)
    {
        $k->ispisKosarkasa();
        echo "<span style='color:red;'> " . teskiCentar($k) . "</span>";
    }

teskiCentar($k2);
?>